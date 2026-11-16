<?php

namespace JeffersonGoncalves\Filament\LgpdIncidents;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class LgpdIncidentsServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-lgpd-incidents';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
