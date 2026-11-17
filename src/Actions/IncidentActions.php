<?php

namespace JeffersonGoncalves\Filament\LgpdIncidents\Actions;

use Filament\Actions\Action;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action as TableAction;
use JeffersonGoncalves\Filament\LgpdIncidents\Support\Labels;
use JeffersonGoncalves\LgpdIncidents\Enums\Risk;
use JeffersonGoncalves\LgpdIncidents\IncidentManager;
use JeffersonGoncalves\LgpdIncidents\Models\Incident;

/**
 * Row and view-page actions: each one is a thin call to laravel-lgpd-incidents' IncidentManager.
 */
class IncidentActions
{
    /**
     * @param  class-string<Action|TableAction>  $class
     * @return list<Action|TableAction>
     */
    public static function all(string $class = Action::class): array
    {
        return [static::assess($class), static::notifyAnpd($class), static::complement($class), static::notifySubjects($class), static::close($class)];
    }

    public static function assess(string $class = Action::class): Action|TableAction
    {
        return $class::make('assess')
            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.actions.assess.label'))
            ->icon('heroicon-o-scale')
            ->color('warning')
            ->visible(fn (Incident $record): bool => $record->closed_at === null)
            ->modalDescription(__('filament-lgpd-incidents::filament-lgpd-incidents.actions.assess.description'))
            ->fillForm(fn (Incident $record): array => ['risk' => $record->risk?->value, 'measures' => $record->getAttribute('measures')])
            ->form([
                Select::make('risk')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.risk'))
                    ->options(Labels::risks())
                    ->required(),
                Textarea::make('measures')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.measures')),
            ])
            ->action(function (Incident $record, array $data): void {
                app(IncidentManager::class)->assess($record, Risk::from($data['risk']), $data['measures'] ?? null);
                static::done('assess');
            });
    }

    public static function notifyAnpd(string $class = Action::class): Action|TableAction
    {
        return $class::make('notifyAnpd')
            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.actions.notify_anpd.label'))
            ->icon('heroicon-o-building-library')
            ->color('info')
            ->visible(fn (Incident $record): bool => $record->closed_at === null && $record->risk !== Risk::Low && $record->anpd_notified_at === null)
            ->form([
                TextInput::make('protocol')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.anpd_protocol')),
                DateTimePicker::make('at')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.notified_at'))
                    ->default(now())
                    ->required(),
                Toggle::make('partial')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.partial'))
                    ->helperText(__('filament-lgpd-incidents::filament-lgpd-incidents.help.partial')),
            ])
            ->action(function (Incident $record, array $data): void {
                app(IncidentManager::class)->notifyAnpd($record, $data['protocol'] ?? null, Labels::date($data['at']), (bool) ($data['partial'] ?? false));
                static::done('notify_anpd');
            });
    }

    public static function complement(string $class = Action::class): Action|TableAction
    {
        return $class::make('complement')
            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.actions.complement.label'))
            ->icon('heroicon-o-document-plus')
            ->color('info')
            ->visible(fn (Incident $record): bool => $record->owesComplement())
            ->modalDescription(fn (Incident $record): string => __('filament-lgpd-incidents::filament-lgpd-incidents.actions.complement.description', ['date' => $record->complement_due_at?->format('d/m/Y')]))
            ->form([
                DateTimePicker::make('at')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.complemented_at'))
                    ->default(now())
                    ->required(),
            ])
            ->action(function (Incident $record, array $data): void {
                app(IncidentManager::class)->complement($record, Labels::date($data['at']));
                static::done('complement');
            });
    }

    public static function notifySubjects(string $class = Action::class): Action|TableAction
    {
        return $class::make('notifySubjects')
            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.actions.notify_subjects.label'))
            ->icon('heroicon-o-envelope')
            ->color('info')
            ->visible(fn (Incident $record): bool => $record->closed_at === null && $record->risk !== Risk::Low && $record->subjects_notified_at === null)
            ->form([
                DateTimePicker::make('at')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.notified_at'))
                    ->default(now())
                    ->required(),
            ])
            ->action(function (Incident $record, array $data): void {
                app(IncidentManager::class)->notifySubjects($record, Labels::date($data['at']));
                static::done('notify_subjects');
            });
    }

    public static function close(string $class = Action::class): Action|TableAction
    {
        return $class::make('close')
            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.actions.close.label'))
            ->icon('heroicon-o-check-circle')
            ->color('success')
            ->visible(fn (Incident $record): bool => $record->closed_at === null && $record->risk !== null)
            ->fillForm(fn (Incident $record): array => ['measures' => $record->getAttribute('measures')])
            ->form([
                Textarea::make('measures')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.measures'))
                    ->required(),
            ])
            ->action(function (Incident $record, array $data): void {
                app(IncidentManager::class)->close($record, $data['measures']);
                static::done('close');
            });
    }

    protected static function done(string $action): void
    {
        Notification::make()->success()->title(__("filament-lgpd-incidents::filament-lgpd-incidents.actions.{$action}.success"))->send();
    }
}
