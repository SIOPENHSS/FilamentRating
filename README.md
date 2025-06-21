# Filament Rating

Add beautiful and customizable rating fields and columns to Filament forms and tables.

| Form Component                                                                                                                   | Table Column                                                                                                                    | Infolist Entry                                                                                                                       |
|----------------------------------------------------------------------------------------------------------------------------------|---------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------|
| ![Rating form component](https://raw.githubusercontent.com/mokhosh/filament-rating/main/images/mokhosh-filament-rating-form.png) | ![Rating table column](https://raw.githubusercontent.com/mokhosh/filament-rating/main/images/mokhosh-filament-rating-table.png) | ![Rating infolist entry](https://raw.githubusercontent.com/mokhosh/filament-rating/main/images/mokhosh-filament-rating-infolist.png) |

## 📦 About This Fork

This package is a fork of [mokhosh/filament-rating](https://github.com/mokhosh/filament-rating),  
customized to fit the specific needs of an internal project.

Modifications include:

- ✅ Feature adjustments and enhancements
- ✅ Logic changes based on project requirements
- ✅ Compatibility improvements (if applicable)

All original copyrights remain with the original author  
under the terms of the MIT license.

## Installation

You can install the package via composer:

```bash
composer require siopen/filament-rating
```

## Usage

You can add a rating field to your forms like this:

```php
use Mokhosh\FilamentRating\Components\Rating;

$form->schema([
    Rating::make(),
]);
```

You can add a rating column to your tables like this:

```php
use Mokhosh\FilamentRating\Columns\RatingColumn;

$table->schema([
    RatingColumn::make(),
]);
```

You can add a rating entry to your infolists like this:

```php
use Mokhosh\FilamentRating\Entries\RatingEntry;

$infolist->schema([
    RatingEntry::make(),
]);
```

## Themes

You can choose the theme.
The default value is: `RatingTheme::Simple`.
The accepted values are: `RatingTheme::Simple`, `RatingTheme::HalfStars`, like this:

```php
use Mokhosh\FilamentRating\RatingTheme;

$form->schema([
    Rating::make()->theme(RatingTheme::Simple),
]);
```

## Maximum Stars

You can change the number of total stars.
The default value is `5`.
The accepted values are number, like this:

```php
$form->schema([
    Rating::make()->stars(10),
]);
```

## Allowing Zero Stars

If you want to allow zero stars to be chosen, you can do so like this:

```php
$form->schema([
    Rating::make()->allowZero(),
]);
```

## Customizing The Size

You can customize the size of the stars.
The default value is `md`.
The accepted values are: `xs`, `sm`, `md`, `lg` and `xl`, like this:

```php
$form->schema([
    Rating::make()->size('sm'),
]);
```

## Customizing Colors

You can customize the color of the stars by choosing one of the Filament theme colors.
The default value is `primary`.
The accepted values are: `danger`, `gray`, `info`, `primary`, `success` and `warning`, like this:

```php
$form->schema([
    Rating::make()->color('success'),
]);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mo Khosh](https://github.com/mokhosh)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
