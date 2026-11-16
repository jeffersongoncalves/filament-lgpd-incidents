<?php

namespace JeffersonGoncalves\Filament\LgpdIncidents\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\LgpdIncidents\LgpdIncidentsPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                LgpdIncidentsPlugin::make(),
            ]);
    }
}
