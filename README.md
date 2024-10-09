# Revenue Monster Laravel Wrapper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dash8x/rm-laravel.svg?style=flat-square)](https://packagist.org/packages/dash8x/rm-laravel)
[![Test Status](../../actions/workflows/run-tests.yml/badge.svg)](../../actions/workflows/run-tests.yml)
![Code Coverage Badge](./.github/coverage.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/dash8x/rm-laravel.svg?style=flat-square)](https://packagist.org/packages/dash8x/rm-laravel)

Laravel wrapper for [Revenue Monster PHP SDK](https://github.com/RevenueMonster/RM-API-SDK-PHP).

## Installation

You can install the package via composer:

``` bash
composer require dash8x/rm-laravel
```

Optionally you can use the Facade for shorter code. Add this to your facades:

``` bash
'RevenueMonster' => Dash8x\RevenueMonster\Facades\RevenueMonsterFacade::class;
```

### Setting up the Revenue Monster credentials

Add your Revenue Monster Client ID and Client Secret to your `config/services.php`.
You can refer to how to create the API Client from the [Official Revenue Monster Documentation](https://doc.revenuemonster.my/docs/quickstart/signature-algorithm).

Make sure to add the private key file to gitignore if you've it in the project directory.

``` php
// config/services.php
...
'rm' => [
    'client_id' => env('RM_CLIENT_ID'), // Client ID 
    'client_secret' => env('RM_CLIENT_SECRET'), // Client Secret
    'sandbox' => env('RM_SANDBOX', false), // Whether to use the sandbox mode
    'private_key' => base_path('/rm-private-key.pem'), // Path to the private key file                           
],
...
```

## Usage

Using the App container:

 
``` php
$rm = App::make('rm');

// Get merchant profile
try {
  $response = $rm->merchant->profile();
} catch(ApiException $e) {
  echo "statusCode : {$e->getCode()}, errorCode : {$e->getErrorCode()}, errorMessage : {$e->getMessage()}";
} catch(Exception $e) {
  echo $e->getMessage();
}
```

Using the Facade

``` php

// Get merchant profile
try {
  $response = RevenueMonster::merchant()->profile();
} catch(ApiException $e) {
  echo "statusCode : {$e->getCode()}, errorCode : {$e->getErrorCode()}, errorMessage : {$e->getMessage()}";
} catch(Exception $e) {
  echo $e->getMessage();
}
```

### Available Methods

Refer to the readme for the [Official PHP SDK](https://github.com/RevenueMonster/RM-API-SDK-PHP).

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email contact@arushad.org instead of using the issue tracker.

## Credits

- [Arushad Ahmed (@dash8x)](https://github.com/dash8x)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
