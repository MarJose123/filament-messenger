# one-to-one chatting system package inside filamentphp

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marjose123/filament-messenger.svg?style=flat-square)](https://packagist.org/packages/marjose123/filament-messenger)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/marjose123/filament-messenger/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/marjose123/filament-messenger/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/marjose123/filament-messenger/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/marjose123/filament-messenger/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marjose123/filament-messenger.svg?style=flat-square)](https://packagist.org/packages/marjose123/filament-messenger)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require marjose123/filament-messenger
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-messenger-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-messenger-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-messenger-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentMessenger = new MarJose123\FilamentMessenger();
echo $filamentMessenger->echoPhrase('Hello, MarJose123!');
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

- [MarJose123](https://github.com/MarJose123)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
