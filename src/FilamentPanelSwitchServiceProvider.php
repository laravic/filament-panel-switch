<?php

namespace Laravic\FilamentPanelSwitch;

use Filament\Facades\Filament;
use Laravic\FilamentPanelSwitch\Testing\TestsFilamentPanelSwitch;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentPanelSwitchServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-panel-switch';

    public static string $viewNamespace = 'filament-panel-switch';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name);

        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageBooted(): void
    {
        // Testing
        Testable::mixin(new TestsFilamentPanelSwitch);

        Filament::serving(fn () => FilamentPanelSwitch::boot());
    }
}
