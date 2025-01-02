<?php

namespace IbrahimBougaoua\FilamentRatingStar;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentRatingStarServiceProvider extends PackageServiceProvider
{
    protected array $styles = [
        'filament-rating' => __DIR__ . '/../resources/dist/style.css',
    ];

    public function configurePackage(Package $package) : void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-rating-star')
            ->hasConfigFile()
            ->hasViews();
    }
}
