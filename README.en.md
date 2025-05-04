🇬🇧 ENGLISH | [🇷🇺 РУССКИЙ](README.md)

# PHP SDK for Telegram Bot API

Strictly typed PHP classes for Telegram Bot API based on the [official documentation](https://core.telegram.org/bots/api)
to use in the [Phenogram Framework](https://github.com/phenogram/framework)

This package is perfect for those who only need to send API requests without handling updates.

Mostly generated using [scrapper](https://github.com/phenogram/scraper)

This is still a work in progress and not every class is tested or used.
If you find some inconsistency with the documentation, feel free to file an issue.
Everything that is not covered in the official Telegram Bot API documentation is out of the scope of this project.

Current supported Telegram bot API version is **v9.0.0**

This is just an SDK for your Telegram bot, not a full framework.
You can use it as is or use only the parts you need.

If you need a framework, check out [Phenogram](https://github.com/phenogram/framework)

# Installation

```bash
composer require phenogram/bindings
```

# Usage
This package consists of 3 main parts: api, serializer, and factory.

You'll use [Api](src/Api.php) to send requests to the bot API.

The [Serializer](src/Serializer.php) is responsible for converting objects to arrays for client sending and
converting API responses back into strictly typed objects.

All types are implemented as interfaces with properties
(thanks to [new PHP 8.4 feature](https://www.php.net/manual/en/migration84.new-features.php#migration84.new-features.core.property-hooks)),
which allows you to easily override them if needed.

The [Factory](src/Factory.php) exists precisely to make type overriding easier,
it's used in the serializer and is responsible for creating specific objects.

## Serializer
You can see the example usage in the [Api](src/Api.php) class.

But here is a simple example:
```php
use Phenogram\Bindings\Serializer;

$serializer = new Serializer();
$inlineKeyboardMarkup = new InlineKeyboardMarkup(
    inlineKeyboard: [[
        new InlineKeyboardButton(text: 'Button 1', callbackData: 'data1')
    ]],
);

$data = $serializer->serialize([
    'reply_markup' => $inlineKeyboardMarkup,
]);

$arrayKeyboard = [
    'reply_markup' => [
        'inline_keyboard' => [[
            ['text' => 'Button 1', 'callback_data' => 'data1']
        ]],
    ],
];

assert($arrayKeyboard === $data);
```

It can also be used to deserialize Telegram requests into typed PHP classes.
The only not so obvious thing is that you need to pass json encoded string
from the `result` field of the Telegram request, not the whole request.

```php
use Phenogram\Bindings\Serializer;
use Phenogram\Bindings\Types\Update;
use Phenogram\Bindings\Types\Message;
use Phenogram\Bindings\Types\Chat;

$updatesData = [[
    'update_id' => 1,
    'message' => [
        'message_id' => 2,
        'chat' => [
            'id' => 3,
            'type' => 'private',
        ],
        'date' => 1600000000,
    ],
]];

$serializer = new Serializer();
$updates = $serializer->deserialize(
    data: $updatesData,
    type: UpdateInterface::class,
    isArray: true,
);

assert($updates[0] instanceof UpdateInterface);
assert($updates[0]->message instanceof MessageInterface);
assert($updates[0]->message->chat instanceof ChatInterface);
```

## API Usage

### Client
To use the API, you first need to implement the ClientInterface, which has only one method - `sendRequest`.

> Pay special attention to file handling.
> The library does not provide an implementation of InputFileInterface,
> how you read and send files depends on your client.

The implementation of the client is out of scope for this project,
but here's an example implementation using ext-curl:

> You can see it in action in [tests](tests/Readme/ReadmeClientTest.php)
```php
<?php

declare(strict_types=1);

namespace Phenogram\Bindings\Tests\Readme;

use Phenogram\Bindings\ClientInterface;
use Phenogram\Bindings\Types;

final readonly class ReadmeLocalFile implements Types\Interfaces\InputFileInterface
{
    public function __construct(
        public string $filePath
    ) {}
}

final readonly class ReadmeClient implements ClientInterface
{
    public function __construct(
        private string $token,
        private string $apiUrl = 'https://api.telegram.org',
    ) {
    }

    public function sendRequest(string $method, array $data): Types\Interfaces\ResponseInterface
    {
        $ch = curl_init("{$this->apiUrl}/bot{$this->token}/{$method}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        foreach ($data as $key => $value) {
            if ($value instanceof ReadmeLocalFile) {
                if (!file_exists($value->filePath)) {
                    throw new \RuntimeException("File not found: {$value->filePath}");
                }

                $data[$key] = new \CURLFile($value->filePath);
            }
        }

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new \RuntimeException('Request Error: ' . curl_error($ch));
        }

        curl_close($ch);

        $responseData = json_decode($response, true);

        if (!isset($responseData['ok']) || !isset($responseData['result'])) {
            return new Types\Response(
                ok: false,
                errorCode: $responseData['error_code'] ?? null,
                description: $responseData['description'] ?? null,
                parameters: isset($responseData['parameters']) ? new Types\ResponseParameters(
                    migrateToChatId: $responseData['parameters']['migrate_to_chat_id'] ?? null,
                    retryAfter: $responseData['parameters']['retry_after'] ?? null,
                ) : null,
            );
        }

        return new Types\Response(
            ok: $responseData['ok'],
            result: $responseData['result'],
            errorCode: $responseData['error_code'] ?? null,
            description: $responseData['description'] ?? null,
            parameters: isset($responseData['parameters']) ? new Types\ResponseParameters(
                migrateToChatId: $responseData['parameters']['migrate_to_chat_id'] ?? null,
                retryAfter: $responseData['parameters']['retry_after'] ?? null,
            ) : null,
        );
    }
}
```

But I would of course recommend using some library like Guzzle or amphp/http-client.
You can find an example implementation with amphp/http-client in the [Phenogram Framework](https://github.com/phenogram/framework/blob/mother/src/TelegramBotApiClient.php)

### Making Requests

```php
$api = new Api(
    client: new TelegramBotApiClient($token),
    serializer: new Serializer(),
);

$me = $api->getMe();

assert($me instanceof User::class);
```

### Overriding Types
Let's say you want to use your own implementation of ChatLocationInterface instead of the standard one,
to make the address always uppercase.

First, you need a new class that implements ChatLocationInterface.
For simplicity, we'll inherit from our ChatLocation class.

```php
class MyChatLocation extends \Phenogram\Bindings\Types\ChatLocation
{
    public string $address {
        get => $this->normalizeAddress($this->address);
    }

    private function normalizeAddress(string $address): string
    {
        return mb_strtoupper($address);
    }
}
```

Next, we need to override the factory to make it create our new class instead of the standard one.

```php
use Phenogram\Bindings\Factory;
use Phenogram\Bindings\Types\Interfaces\ChatLocationInterface;
use Phenogram\Bindings\Types\Interfaces\LocationInterface;

class MyFactory extends Factory
{
    public function makeChatLocation(
        LocationInterface $location,
        string $address
    ): ChatLocationInterface
    {
        return new MyChatLocation(
            location: $location,
            address: $address,
        );
    }
}
```

And finally - create and use an Api object with a serializer that uses our factory:
```php
$api = new Api(
    client: new TelegramBotApiClient($token),
    serializer: new Serializer(
        factory: new MyFactory()
    ),
);
```

> You can see this in action in [test](tests/Readme/ReadmeFactoryTest.php)

# Conclusion
Although I'm already using both these classes and the [framework](https://github.com/phenogram/framework) in production in my projects
[sistent](https://t.me/sistent_bot), [mystaro](https://t.me/mystaro_bot), and [genera4](https://t.me/genera4_bot),
this project is still under active development and is provided as-is.

Test it yourself!