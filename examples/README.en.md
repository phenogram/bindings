# Executable examples

[Русский](README.md)

Each example runs without a bot token.
Each example uses fixed data.
The test suite runs all examples.

These commands use files from a source checkout.
Run `composer install` in the package root before you run an example.

Run one example from the package root:

```bash
php examples/01-serialize-keyboard.php
```

Run all examples:

```bash
for file in examples/[0-9][0-9]-*.php; do php "$file"; done
```

| File | Purpose |
|---|---|
| [`01-serialize-keyboard.php`](01-serialize-keyboard.php) | Convert PHP objects and camel-case keys to a Telegram payload. |
| [`02-deserialize-update.php`](02-deserialize-update.php) | Convert an update payload to typed PHP objects. |
| [`03-call-api.php`](03-call-api.php) | Call `Api` with a deterministic client. |
| [`04-custom-type.php`](04-custom-type.php) | Replace one result type with a custom implementation. |
| [`05-test-factories.php`](05-test-factories.php) | Create a deterministic test fixture. |
| [`06-handle-api-error.php`](06-handle-api-error.php) | Inspect a failed Telegram response. |

The `RecordingClient` is only a test double.
It does not send HTTP requests.
Read the [client integration guide](../docs/en/client-integration.md) before you add a production client.
