🇬🇧 ENGLISH | [🇷🇺 РУССКИЙ](README.md)

# Telegram Bot API PHP bindings

Strictly typed PHP classes for Telegram Bot API based on the [official documentation](https://core.telegram.org/bots/api)
to use in the [Phenogram Framework](https://github.com/phenogram/framework)

Mostly generated using [scrapper](https://github.com/phenogram/scraper)

This is still a work in progress and not every class is tested or used.
If you find some inconsistency with the documentation, feel free to file an issue.
Everything that is not covered in the documentation is out of the scope of this project.

Current supported Telegram bot API version is **v7.10**

# Installation

```bash
composer require phenogram/bindings
```

# Usage

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

$json = $serializer->serialize([
    'reply_markup' => $inlineKeyboardMarkup,
]);

$arrayKeyboard = [
    'reply_markup' => [
        'inline_keyboard' => [[
            ['text' => 'Button 1', 'callback_data' => 'data1']
        ]],
    ],
];

$jsonFromArray = json_encode($arrayKeyboard);

assert($jsonFromArray === $json);
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
        'message_id' => 54321,
        'chat' => [
            'id' => 11223344,
            'type' => 'private',
        ],
        'date' => 1600000000,
    ],
]];

$serializer = new Serializer();
$updates = $serializer->deserialize(
    data: json_encode($updatesData),
    type: Update::class,
    isArray: true,
);

assert($updates[0] instanceof Update::class);
assert($updates[0]->message instanceof Message::class);
assert($updates[0]->message->chat instanceof Chat::class);
```

## API usage

### Client
To actually use the API you first need to implement the ClientInterface, which is a simple interface with a single method `sendRequest`.
Then you can use the `Api` class to send requests to the Telegram API.

The implementation of the client is out of the scope of this project, but you can check
the example amphp/http-client implementation in the [Phenogram Framework](https://github.com/phenogram/framework/blob/mother/src/TelegramBotApiClient.php)

The most basic implementation with ext-curl might look like this:
```php
use Phenogram\Bindings\ClientInterface;
use Phenogram\Bindings\Types;

final readonly class TelegramBotApiClient implements ClientInterface
{
    public function __construct(
        private string $token,
        private string $apiUrl = 'https://api.telegram.org',
    ) {
    }
    
    public function sendRequest(string $method, string $json): Types\Response
    {
        $ch = curl_init("{$this->apiUrl}/bot{$this->token}/{$method}");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
    
        if (curl_errno($ch)) {
            throw new \RuntimeException('Request Error: ' . curl_error($ch));
        }
    
        curl_close($ch);
    
        $responseData = json_decode($response, true);
    
        if (!isset($responseData['ok']) || !isset($responseData['result'])) {
            return new Types\Response(
                ok: false,
                result: null,
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
            result: json_encode($responseData['result']),
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

### Making requests

```php
$api = new Api(
    client: new TelegramBotApiClient($token),
    serializer: new Serializer(),
);

$me = $api->getMe();

assert($me instanceof User::class);
```

# Work in progress
The main issue for now if file uploads with MultiPart requests, but I'm thinking about it.

Also I need to make Api::doRequest method type safe with generics, not sure how to do it yet, phpstan keeps winning.

# Conclusion
This is just an SDK, a building block for your Telegram bot, not the full framework,
you can use it as is or extend it to fit your needs.

If you need a framework, check out the [Phenogram Framework](https://github.com/phenogram/framework)