<?php

namespace JeffersonGoncalves\Filament\LgpdIncidents\Resources\Incidents;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action as TableAction;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use JeffersonGoncalves\Filament\LgpdIncidents\Actions\IncidentActions;
use JeffersonGoncalves\Filament\LgpdIncidents\LgpdIncidentsPlugin;
use JeffersonGoncalves\Filament\LgpdIncidents\Resources\Incidents\Pages\CreateIncident;
use JeffersonGoncalves\Filament\LgpdIncidents\Resources\Incidents\Pages\EditIncident;
use JeffersonGoncalves\Filament\LgpdIncidents\Resources\Incidents\Pages\ListIncidents;
use JeffersonGoncalves\Filament\LgpdIncidents\Resources\Incidents\Pages\ViewIncident;
use JeffersonGoncalves\Filament\LgpdIncidents\Support\Labels;
use JeffersonGoncalves\LgpdIncidents\Models\Incident;

class IncidentResource extends Resource
{
    protected static ?string $model = Incident::class;

    public static function form(Form $form): Form
    {
        return $form
            ->columns(2)
            ->schema([
                TextInput::make('title')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.title'))
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                DateTimePicker::make('discovered_at')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.discovered_at'))
                    ->helperText(__('filament-lgpd-incidents::filament-lgpd-incidents.help.discovered_at'))
                    ->default(now())
                    ->required()
                    ->disabledOn('edit'),
                DateTimePicker::make('occurred_at')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.occurred_at')),
                Textarea::make('description')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.description'))
                    ->columnSpanFull(),
                TagsInput::make('data_categories')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.data_categories')),
                TextInput::make('affected_subjects')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.affected_subjects'))
                    ->numeric()
                    ->minValue(0),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->columns(1)
            ->schema([
                Section::make()
                    ->columns(2)
                    ->schema([
                        TextEntry::make('title')
                            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.title'))
                            ->columnSpanFull(),
                        TextEntry::make('status')
                            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.status'))
                            ->state(fn (Incident $record): string => Labels::status($record))
                            ->formatStateUsing(fn (string $state): string => __("filament-lgpd-incidents::filament-lgpd-incidents.status.{$state}"))
                            ->badge()
                            ->color(fn (string $state): string => Labels::statusColor($state)),
                        TextEntry::make('risk')
                            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.risk'))
                            ->state(fn (Incident $record): ?string => $record->risk?->value)
                            ->formatStateUsing(fn (?string $state): string => Labels::risk($state))
                            ->placeholder(Labels::risk(null))
                            ->badge()
                            ->color(fn (?string $state): string => Labels::riskColor($state)),
                        TextEntry::make('discovered_at')
                            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.discovered_at'))
                            ->dateTime(),
                        TextEntry::make('due_at')
                            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.due_at'))
                            ->dateTime()
                            ->color(fn (Incident $record): ?string => $record->isOverdue() ? 'danger' : null),
                        TextEntry::make('occurred_at')
                            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.occurred_at'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('affected_subjects')
                            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.affected_subjects'))
                            ->placeholder('-'),
                        TextEntry::make('data_categories')
                            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.data_categories'))
                            ->badge()
                            ->placeholder('-'),
                        TextEntry::make('anpd_notified_at')
                            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.anpd_notified_at'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('anpd_protocol')
                            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.anpd_protocol'))
                            ->placeholder('-'),
                        TextEntry::make('subjects_notified_at')
                            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.subjects_notified_at'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('closed_at')
                            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.closed_at'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('description')
                            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.description'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('measures')
                            ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.measures'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.title'))
                    ->searchable()
                    ->limit(50),
                TextColumn::make('status')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.status'))
                    ->state(fn (Incident $record): string => Labels::status($record))
                    ->formatStateUsing(fn (string $state): string => __("filament-lgpd-incidents::filament-lgpd-incidents.status.{$state}"))
                    ->badge()
                    ->color(fn (string $state): string => Labels::statusColor($state)),
                TextColumn::make('risk')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.risk'))
                    ->state(fn (Incident $record): string => Labels::risk($record->risk?->value))
                    ->badge()
                    ->color(fn (Incident $record): string => Labels::riskColor($record->risk?->value)),
                TextColumn::make('discovered_at')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.discovered_at'))
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('due_at')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.due_at'))
                    ->dateTime()
                    ->sortable()
                    ->color(fn (Incident $record): ?string => $record->isOverdue() ? 'danger' : null),
                IconColumn::make('anpd')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.anpd'))
                    ->state(fn (Incident $record): bool => $record->anpd_notified_at !== null)
                    ->boolean(),
                IconColumn::make('subjects')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.subjects'))
                    ->state(fn (Incident $record): bool => $record->subjects_notified_at !== null)
                    ->boolean(),
            ])
            ->defaultSort('discovered_at', 'desc')
            ->filters([
                Filter::make('pending')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.status.pending'))
                    ->query(fn (Builder $query): Builder => $query->scopes('pending')),
                Filter::make('overdue')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.status.overdue'))
                    ->query(fn (Builder $query): Builder => $query->scopes('overdue')),
                SelectFilter::make('risk')
                    ->label(__('filament-lgpd-incidents::filament-lgpd-incidents.fields.risk'))
                    ->options(Labels::risks()),
            ])
            ->actions([
                ViewAction::make(),
                ActionGroup::make([EditAction::make(), ...IncidentActions::all(TableAction::class)]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListIncidents::route('/'),
            'create' => CreateIncident::route('/create'),
            'view' => ViewIncident::route('/{record}'),
            'edit' => EditIncident::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('filament-lgpd-incidents::filament-lgpd-incidents.resource.label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament-lgpd-incidents::filament-lgpd-incidents.resource.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return LgpdIncidentsPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return LgpdIncidentsPlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): ?string
    {
        return LgpdIncidentsPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(): string
    {
        return LgpdIncidentsPlugin::get()->getSlug();
    }

    public static function getNavigationBadge(): ?string
    {
        $pending = Incident::query()->scopes('pending')->count();

        return $pending > 0 ? (string) $pending : null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return Incident::query()->scopes('overdue')->exists() ? 'danger' : 'warning';
    }
}
