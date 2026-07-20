[Русский](../ru/getting-started.md) | **English**

# Getting started

This guide explains the scope of Phenogram Bindings.
It also explains the first integration steps.

## Select the correct package

| Package | Use it for |
|---|---|
| [`phenogram/bindings`](https://github.com/phenogram/bindings) | Typed Telegram Bot API methods and data objects |
| [`phenogram/framework`](https://github.com/phenogram/framework) | Bot routing, middleware, update processing, and an HTTP client |
| [`phenogram/gateway-bindings`](https://github.com/phenogram/gateway-bindings) | Typed Telegram Gateway API methods and data objects |
| [`phenogram/scraper`](https://github.com/phenogram/scraper) | Generation of PHP code from the Telegram Bot API documentation |

Use this package when your application already has a transport layer.
Use the framework when you need a complete bot runtime.

The Telegram Bot API and the Telegram Gateway API are different products.
Do not use `gateway-bindings` for bot methods.

## Requirements

Install PHP 8.4 or a later PHP 8 release.
Install Composer 2.

The package has no third-party runtime dependency.
The development tools have separate Composer dependencies.

## Installation

Install the current stable release:

```bash
composer require phenogram/bindings
```

Composer uses the `Phenogram\Bindings\` PSR-4 namespace.
Your Composer autoloader loads all package classes.

## Run the repository examples

The example commands below use files from a source checkout.
Prepare the checkout before you run them:

```bash
git clone https://github.com/phenogram/bindings.git
cd bindings
composer install
```

## Create a request payload

Start with the serializer if you only need Telegram-compatible data.
Run the complete example:

```bash
php examples/01-serialize-keyboard.php
```

The example creates an `InlineKeyboardMarkup` object.
The serializer changes PHP property names to Telegram field names.
The serializer removes values that are `null`.

## Create typed objects

Use `Serializer::deserialize()` for decoded Telegram result data.
Pass a type interface as the target type.

Run the complete example:

```bash
php examples/02-deserialize-update.php
```

Pass only the Telegram `result` value to the serializer.
Do not pass the complete response envelope.

## Call an API method

Implement `ClientInterface` before you create `Api`.
The interface has one method:

```php
public function sendRequest(
    string $method,
    array $data,
): Phenogram\Bindings\Types\Interfaces\ResponseInterface;
```

The client sends the request.
The client returns the complete Telegram response envelope.
The `Api` class then creates the typed result.

Run the offline API example:

```bash
php examples/03-call-api.php
```

The example uses `RecordingClient`.
This client is a test double.
It does not send a network request.

Read the [client integration guide](client-integration.md) before you write a production client.

## Handle an error

`Api` throws `ResponseException` when `ok` is `false` or `result` is `null`.
Read the response through `$exception->response`.

Run the complete example:

```bash
php examples/06-handle-api-error.php
```

Transport failures are different.
Your client must throw its own transport exception for a connection failure.

## Next steps

Read the [architecture guide](architecture.md) to understand the extension points.
Read the [testing guide](testing.md) before you add an example.
Use the [official Telegram Bot API documentation](https://core.telegram.org/bots/api) for method behavior.
