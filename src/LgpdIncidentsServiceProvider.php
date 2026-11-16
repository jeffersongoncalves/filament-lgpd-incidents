<?php

namespace JeffersonGoncalves\Filament\LgpdIncidents;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LgpdIncidentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-lgpd-incidents')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
