<?php

use Illuminate\Support\Carbon;
use JeffersonGoncalves\Filament\LgpdIncidents\LgpdIncidentsPlugin;
use JeffersonGoncalves\Filament\LgpdIncidents\Resources\Incidents\IncidentResource;
use JeffersonGoncalves\Filament\LgpdIncidents\Resources\Incidents\Pages\CreateIncident;
use JeffersonGoncalves\Filament\LgpdIncidents\Resources\Incidents\Pages\EditIncident;
use JeffersonGoncalves\Filament\LgpdIncidents\Resources\Incidents\Pages\ListIncidents;
use JeffersonGoncalves\Filament\LgpdIncidents\Resources\Incidents\Pages\ViewIncident;
use JeffersonGoncalves\Filament\LgpdIncidents\Tests\Fixtures\TestUser;
use JeffersonGoncalves\LgpdIncidents\Enums\Risk;
use JeffersonGoncalves\LgpdIncidents\Facades\LgpdIncidents;
use JeffersonGoncalves\LgpdIncidents\Models\Incident;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'DPO', 'email' => 'dpo@example.com']));
});

it('registers an incident with the business-day deadline', function () {
    Livewire::test(CreateIncident::class)
        ->fillForm([
            'title' => 'Backup exposed',
            'discovered_at' => '2026-11-13 10:00:00',
            'data_categories' => ['personal', 'financial'],
            'affected_subjects' => 120,
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(Incident::sole())
        ->due_at->toDateTimeString()->toBe('2026-11-18 23:59:59')
        ->data_categories->toBe(['personal', 'financial'])
        ->risk->toBeNull();
});

it('lists incidents and filters the overdue ones', function () {
    $overdue = LgpdIncidents::open('Backup exposed', Carbon::now()->subDays(10));
    $recent = LgpdIncidents::open('Phishing');

    Livewire::test(ListIncidents::class)
        ->assertCanSeeTableRecords([$overdue, $recent])
        ->filterTable('overdue')
        ->assertCanSeeTableRecords([$overdue])
        ->assertCanNotSeeTableRecords([$recent]);

    expect(IncidentResource::getNavigationBadge())->toBe('2')
        ->and(IncidentResource::getNavigationBadgeColor())->toBe('danger');
});

it('walks an incident through assessment, notifications and closing', function () {
    $incident = LgpdIncidents::open('Backup exposed');

    Livewire::test(ViewIncident::class, ['record' => $incident->getKey()])
        ->assertActionHidden('close')
        ->callAction('assess', ['risk' => 'relevant', 'measures' => 'Sensitive data exposed.'])
        ->assertHasNoActionErrors();

    Livewire::test(ViewIncident::class, ['record' => $incident->getKey()])
        ->callAction('notifyAnpd', ['protocol' => 'ANPD-42', 'at' => '2026-11-16 09:00:00']);

    Livewire::test(ViewIncident::class, ['record' => $incident->getKey()])
        ->assertActionHidden('notifyAnpd')
        ->callAction('notifySubjects', ['at' => '2026-11-16 10:00:00']);

    Livewire::test(ViewIncident::class, ['record' => $incident->getKey()])
        ->callAction('close', ['measures' => 'Bucket made private.']);

    expect($incident->fresh())
        ->risk->toBe(Risk::Relevant)
        ->anpd_protocol->toBe('ANPD-42')
        ->subjects_notified_at->toDateTimeString()->toBe('2026-11-16 10:00:00')
        ->measures->toBe('Bucket made private.')
        ->closed_at->not->toBeNull();
});

it('hides the notifications for low-risk incidents', function () {
    $incident = LgpdIncidents::assess(LgpdIncidents::open('Lost encrypted laptop'), Risk::Low);

    Livewire::test(ViewIncident::class, ['record' => $incident->getKey()])
        ->assertActionHidden('notifyAnpd')
        ->assertActionHidden('notifySubjects')
        ->assertActionVisible('close');
});

it('edits the description but never the discovery date', function () {
    $incident = LgpdIncidents::open('Backup exposed', Carbon::parse('2026-11-13 10:00'));

    Livewire::test(EditIncident::class, ['record' => $incident->getKey()])
        ->fillForm(['description' => 'Public bucket for 2 hours.', 'discovered_at' => '2026-11-01 10:00:00'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($incident->fresh())
        ->description->toBe('Public bucket for 2 hours.')
        ->discovered_at->toDateTimeString()->toBe('2026-11-13 10:00:00');
});

it('offers the same actions on the table rows', function () {
    $incident = LgpdIncidents::open('Backup exposed');

    Livewire::test(ListIncidents::class)
        ->callTableAction('assess', $incident, ['risk' => 'low']);

    expect($incident->fresh()->risk)->toBe(Risk::Low);
});

it('applies the fluent plugin options', function () {
    LgpdIncidentsPlugin::get()->navigationGroup('LGPD')->slug('security-incidents');

    expect(IncidentResource::getNavigationGroup())->toBe('LGPD')
        ->and(IncidentResource::getSlug())->toBe('security-incidents');
});
