# The radio button field for the Filament forms

[![Latest Version on Packagist](https://img.shields.io/packagist/v/suleymanozev/filament-radio-button-field.svg?style=flat-square)](https://packagist.org/packages/suleymanozev/filament-radio-button-field)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/suleymanozev/filament-radio-button-field/run-tests?label=tests)](https://github.com/suleymanozev/filament-radio-button-field/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/suleymanozev/filament-radio-button-field/Check%20&%20fix%20styling?label=code%20style)](https://github.com/suleymanozev/filament-radio-button-field/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/suleymanozev/filament-radio-button-field.svg?style=flat-square)](https://packagist.org/packages/suleymanozev/filament-radio-button-field)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require suleymanozev/filament-radio-button-field
```

Add the package blade files the content section of the _**tailwind.config.js**_ file.

```javascript
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./vendor/suleymanozev/**/*.blade.php", // Add this line
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-radio-button-field-views"
```

## Usage

```php
RadioButton::make('amount')
    ->label('Example Label')
    ->options(['1' => 'Example Option Label', '2' => 'Example Option Label 2'])
    ->descriptions(['1' => 'Example Description', '2' => 'Example Description 2'])
    ->columns(3),
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/suleymanozev/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](https://github.com/suleymanozev/filament-radio-button-field/security/policy) on how to report security vulnerabilities.

## Credits

- [Süleyman ÖZEV](https://github.com/suleymanozev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
