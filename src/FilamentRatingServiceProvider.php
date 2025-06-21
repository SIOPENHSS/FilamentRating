<?php

namespace Mokhosh\FilamentRating;

use Filament\Support\Assets\Asset;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentRatingServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-rating';

    public static string $viewNamespace = 'filament-rating';

    public function configurePackage(Package $package) : void
    {
        $package->name(static::$name)
            ->hasCommands($this->getCommands());

        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageRegistered() : void
    {
    }

    public function packageBooted() : void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName(),
        );

        FilamentAsset::registerScriptData(
            $this->getScriptData(),
            $this->getAssetPackageName(),
        );

        // Icon Registration
        FilamentIcon::register($this->getIcons());
    }

    protected function getAssetPackageName() : ?string
    {
        return 'mokhosh/filament-rating';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets() : array
    {
        return [];
    }

    /**
     * @return array<class-string>
     */
    protected function getCommands() : array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getIcons() : array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes() : array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData() : array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getMigrations() : array
    {
        return [
            'create_filament-rating_table',
        ];
    }
}
