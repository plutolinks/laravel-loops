# Laravel Loops

## Introduction

The Laravel Loops SDK provides an expressive interface for interacting with [Loops](https://loops.so)'s API.

## Requirements

Requires PHP 8.1+

## Installation

You may install Loops into your project using the Composer package manager:

```sh
composer require plutolinks/laravel-loops
```

If you wish, you can also publish Loops's configuration file using the `vendor:publish` Artisan command:

```php
php artisan vendor:publish --tag="loops-config"
```

Next, you should configure your Loops API key in your application's .env file:

```dotenv
LOOPS_API_KEY=your-loops-api-key
```

## Usage

You can use the Loops facade like so:

```php
use PlutoLinks\Loops\Laravel\Facades\Loops;

$response = Loops::contacts()->create([
    'email' => 'john@example.com',
    'firstName' => 'John',
]);
```

For usage examples, take a look at the [plutolinks/loops-php](https://github.com/plutolinks/loops-php) repository.

## Credits

- [Hosmel Quintana](https://github.com/hosmelq)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
