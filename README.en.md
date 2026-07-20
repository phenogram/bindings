[Русский](README.md) | **English**

# Phenogram Bindings

[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777BB4?logo=php&logoColor=white)](https://www.php.net/releases/8.4/en.php)
[![Telegram Bot API 10.2](https://img.shields.io/badge/Telegram_Bot_API-10.2-26A5E4?logo=telegram&logoColor=white)](https://core.telegram.org/bots/api)
[![CI](https://github.com/phenogram/bindings/actions/workflows/ci.yaml/badge.svg)](https://github.com/phenogram/bindings/actions/workflows/ci.yaml)
[![Packagist](https://img.shields.io/packagist/v/phenogram/bindings?label=Packagist)](https://packagist.org/packages/phenogram/bindings)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

Zero-dependency, strictly typed PHP bindings for the Telegram Bot API.

The package gives you typed API methods, request serialization, response deserialization, and replaceable object factories.
The package does not select an HTTP client.
The package does not run a bot loop.

Use [Phenogram Framework](https://github.com/phenogram/framework) when you need routing, middleware, and update processing.

## Compatibility

| Item | Supported version |
|---|---|
| Package | `9.x` |
| Telegram Bot API | `10.2` |
| PHP | `^8.4` |
| Runtime packages | None |

The code uses [PHP property hooks](https://www.php.net/manual/en/language.oop5.property-hooks.php).
PHP 8.4 is therefore required.

## Install

```bash
composer require phenogram/bindings
```

## Quick start

Use `Serializer` to create a Telegram payload:

```php
<?php

declare(strict_types=1);

use Phenogram\Bindings\Serializer;
use Phenogram\Bindings\Types\InlineKeyboardButton;
use Phenogram\Bindings\Types\InlineKeyboardMarkup;

require __DIR__ . '/vendor/autoload.php';

$payload = (new Serializer())->serialize([
    'chatId' => 42,
    'text' => 'Select an action.',
    'replyMarkup' => new InlineKeyboardMarkup(
        inlineKeyboard: [[
            new InlineKeyboardButton(
                text: 'Open documentation',
                url: 'https://core.telegram.org/bots/api',
            ),
        ]],
    ),
]);
```

The serializer changes `chatId` to `chat_id`.
It changes typed objects to nested arrays.
It removes values that are `null`.

Use `Api` when your application has a `ClientInterface` implementation.
The client sends the HTTP request.
The client returns the complete Telegram response envelope.

The example commands below require a source checkout and `composer install`.
Run the verified API example:

```bash
php examples/03-call-api.php
```

Run the verified offline examples:

```bash
for file in examples/[0-9][0-9]-*.php; do php "$file"; done
```

## Package map

| Part | Purpose |
|---|---|
| [`ApiInterface`](src/ApiInterface.php) | Defines all supported Telegram methods. |
| [`Api`](src/Api.php) | Serializes requests and creates typed results. |
| [`ClientInterface`](src/ClientInterface.php) | Connects the bindings to an HTTP transport. |
| [`SerializerInterface`](src/SerializerInterface.php) | Defines serialization and deserialization. |
| [`Serializer`](src/Serializer.php) | Maps Telegram data to PHP types. |
| [`FactoryInterface`](src/FactoryInterface.php) | Defines constructors for all result types. |
| [`Factory`](src/Factory.php) | Creates the default result objects. |
| [`Types`](src/Types) | Contains concrete types and their interfaces. |
| [`Factories`](src/Factories) | Creates test fixtures with Faker. |

The test factories need `fakerphp/faker`.
An application does not install this package from the library development dependencies.
Install it in an application that uses the factories:

```bash
composer require --dev fakerphp/faker
```

## Documentation

| Guide | Contents |
|---|---|
| [Getting started](docs/en/getting-started.md) | Scope, installation, and first use |
| [Architecture](docs/en/architecture.md) | Request flow, extension points, and package layout |
| [Client integration](docs/en/client-integration.md) | Transport contract, files, errors, and security |
| [Testing](docs/en/testing.md) | Offline examples, fixtures, and live tests |
| [Executable examples](examples/README.en.md) | Six scripts that run without a bot token |

The [official Telegram Bot API documentation](https://core.telegram.org/bots/api) is the source of truth for Telegram behavior.
Use `ApiInterface` as the local source of truth for supported PHP method signatures.

## Error handling

`Api` throws `ResponseException` when `ok` is `false` or `result` is `null`.
The exception contains the full `ResponseInterface` object.

```bash
php examples/06-handle-api-error.php
```

## Development

Install the package development dependencies:

```bash
composer install
composer tools:install
```

The repository does not track the root `composer.lock` file.
Composer resolves the root development dependencies from the version constraints.
The separate tool projects track lock files for PHPStan and PHP CS Fixer.

Run the offline test suite:

```bash
vendor/bin/phpunit
```

Run static analysis:

```bash
composer phpstan
```

Run all repository checks:

```bash
composer check
```

Read [CONTRIBUTING.md](CONTRIBUTING.md) before you send a change.
Report security problems as described in [SECURITY.md](SECURITY.md).
Use [SUPPORT.md](SUPPORT.md) for support requests.

## License

Phenogram Bindings is available under the [MIT License](LICENSE).
