[Русский](../ru/client-integration.md) | **English**

# Client integration

This guide defines the transport contract for Phenogram Bindings.
Use it when you implement `ClientInterface`.

## Interface contract

The interface has one method:

```php
public function sendRequest(
    string $method,
    array $data,
): Phenogram\Bindings\Types\Interfaces\ResponseInterface;
```

`$method` contains a Telegram method name such as `sendMessage`.
`$data` contains serialized Telegram field names.
The array does not contain values that are `null`.

The method must return the full response envelope.
Do not return only the `result` value.

## Request endpoint

Send cloud API requests to this endpoint:

```text
https://api.telegram.org/bot<token>/<method>
```

Use HTTPS for the cloud API.
Encode text as UTF-8.
Keep the bot token out of logs and exception messages.

Telegram accepts GET and POST requests.
Use POST for a general client.
POST supports JSON and file uploads.

The [official request rules](https://core.telegram.org/bots/api#making-requests) are the source of truth.

## Request encoding

Use `application/json` when the request has no uploaded file.
Encode the complete `$data` array as JSON.

Use `multipart/form-data` when the request has an uploaded file.
Convert each `InputFileInterface` object to the file object of your HTTP library.
Encode nested Telegram objects and arrays as JSON strings in multipart fields.
Use an `attach://<name>` value for a file inside a nested media object.
Add the file as a separate multipart part with the same attachment name.

The serializer keeps `InputFileInterface` objects unchanged.
Your client defines the concrete file classes.
Your client also defines how it reads each file.

Do not read an untrusted file path without validation.
Set a file size limit before you read file content.

## Response envelope

Telegram returns a JSON object.
The object always contains `ok`.
It can also contain these fields:

| Field | Meaning |
|---|---|
| `result` | Successful method result |
| `description` | Human-readable error text |
| `error_code` | Telegram error code |
| `parameters` | Structured recovery information |

Decode the response to an associative array.
Validate that the decoded value is an object.
Validate that `ok` is present.

Create `Phenogram\Bindings\Types\Response` from this data.
Create `ResponseParameters` when `parameters` is present.
Keep the decoded `result` value unchanged.

`Api` checks `ok` and `result`.
It throws `ResponseException` when `ok` is `false` or `result` is `null`.
It sends a successful `result` value to `Serializer`.

Run the failure example:

```bash
php examples/06-handle-api-error.php
```

## Failure categories

Keep transport failures separate from Telegram failures.

Use a transport exception for these failures:

- DNS failure
- Connection timeout
- TLS failure
- Invalid JSON
- Unexpected HTTP body

Return `ResponseInterface` for a valid Telegram error envelope.
Let `Api` convert that envelope to `ResponseException`.

This separation lets the application select the correct retry policy.

## HTTP status

Inspect the HTTP status before you decode the body.
Keep the response body for valid Telegram error envelopes.
Do not include the bot token in an exception.

Telegram can return recovery information in `ResponseParameters`.
Use `retryAfter` for rate-limit handling.
Use `migrateToChatId` when Telegram reports a chat migration.

The bindings do not run retries.
The application or client owns the retry policy.

## Timeouts

Set a connection timeout.
Set a request timeout.

For `getUpdates`, make the request timeout longer than the Telegram `timeout` argument.
Add a small network margin.

Do not retry a non-idempotent method without an application policy.
A retry can create a duplicate message.

## Local Bot API server

Make the API base URL configurable.
This option supports the [local Bot API server](https://core.telegram.org/bots/api#using-a-local-bot-api-server).

Do not assume that the cloud and local file limits are equal.
Read the official server documentation before you change upload limits.

## Update delivery

Telegram supports long polling and webhooks.
These modes are mutually exclusive.

Use `getUpdates` for long polling.
Increase the offset after each accepted update.

Use `setWebhook` for webhook delivery.
Validate the `X-Telegram-Bot-Api-Secret-Token` header when you set a secret token.

Read the [official update rules](https://core.telegram.org/bots/api#getting-updates).

## Production checklist

- Hide the token in logs.
- Validate TLS certificates.
- Set connection and request timeouts.
- Limit response size.
- Limit upload size.
- Validate local file paths.
- Decode JSON with exceptions enabled.
- Preserve `ResponseParameters`.
- Separate transport exceptions from `ResponseException`.
- Add tests for success, Telegram error, invalid JSON, timeout, and file upload.

Use the HTTP client in [Phenogram Framework](https://github.com/phenogram/framework) when you do not need a custom transport.
