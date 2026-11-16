<?php

namespace JeffersonGoncalves\Filament\LgpdIncidents\Resources\Incidents\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\Filament\LgpdIncidents\Resources\Incidents\IncidentResource;

class ListIncidents extends ListRecords
{
    protected static string $resource = IncidentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
