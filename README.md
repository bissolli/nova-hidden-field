# A hidden field for Laravel Nova

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bissolli/nova-hidden-field.svg?style=flat-square)](https://packagist.org/packages/bissolli/nova-hidden-field)
[![Total Downloads](https://img.shields.io/packagist/dt/bissolli/nova-hidden-field.svg?style=flat-square)](https://packagist.org/packages/bissolli/nova-hidden-field)
[![StyleCI](https://github.styleci.io/repos/157219733/shield?branch=master)](https://github.styleci.io/repos/157219733)


![screenshot of the phone field](https://raw.githubusercontent.com/bissolli/nova-hidden-field/master/screenshots/nova-hidden-field.gif)

## Requirements

Laravel Nova, only =)

## Installation

You can install this package into a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require bissolli/nova-hidden-field
```

## Usage

Go straight to your Nova resource and use `Bissolli\NovaHiddenField\PhoneNumber` field:

```php
namespace App\Nova;

use Bissolli\NovaHiddenField\PhoneNumber;

class Member extends Resource
{
    // ...
    
    public function fields(Request $request)
    {
        return [
            // ...
            
            PhoneNumber::make('Anything')
                ->value('field value'),

            // ...
        ];
    }
}
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security-related issues, please email gustavo.bissolli@gmail.com instead of using the issue tracker.

## Credits

- [Gustavo Bissolli](https://github.com/bissolli)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.