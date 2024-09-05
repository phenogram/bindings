# PHP типы для Telegram Bot API

Строго типизированные PHP классы для Telegram Bot API, основанные на [официальной документации](https://core.telegram.org/bots/api),
для использования в [Фреймворке Phenogram](https://github.com/phenogram/framework)

В основном сгенерированы с помощью [scrapper](https://github.com/phenogram/scraper)

Работа всё ещё в процессе, и не каждый класс протестирован или использовался.
Если вы обнаружите какие-либо несоответствия с документацией, не стесняйтесь создать ишью.
Всё, что не описано в документации, выходит за рамки этого проекта.

Текущая поддерживаемая версия Telegram bot API - **v7.9**

# Установка

```bash
composer require phenogram/bindings
```

# Использование

## Сериализатор
Пример использования можно увидеть в классе [Api](src/Api.php).

Но вот простой пример:
```php
use Phenogram\Bindings\Serializer;

$serializer = new Serializer();
$inlineKeyboardMarkup = new InlineKeyboardMarkup(
    inlineKeyboard: [[
        new InlineKeyboardButton(text: 'Кнопка 1', callbackData: 'data1')
    ]],
);

$json = $serializer->serialize([
    'reply_markup' => $inlineKeyboardMarkup,
]);

$arrayKeyboard = [
    'reply_markup' => [
        'inline_keyboard' => [[
            ['text' => 'Кнопка 1', 'callback_data' => 'data1']
        ]],
    ],
];

$jsonFromArray = json_encode($arrayKeyboard);

assert($jsonFromArray === $json);
```

Его также можно использовать для десериализации запросов Telegram в типизированные PHP-классы.
Единственное не совсем очевидное - вам нужно передать JSON-закодированную строку
из поля `result` запроса Telegram, а не весь запрос.

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

## Использование API

### Клиент
Чтобы использовать API, вам сначала нужно реализовать интерфейс ClientInterface,
в котором есть только один метод - `sendRequest`.
Затем вы можете использовать класс `Api` для отправки запросов к API Telegram.

Реализация клиента выходит за рамки этого проекта, но вы можете посмотреть
пример реализации с amphp/http-client в [Фреймворке Phenogram](https://github.com/phenogram/framework/blob/mother/src/TelegramBotApiClient.php)

Самая базовая реализация с использованием ext-curl может выглядеть так:
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
            throw new \RuntimeException('Ошибка запроса: ' . curl_error($ch));
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

Но я, конечно, рекомендую использовать какую-нибудь библиотеку, например Guzzle или amphp/http-client.

### Выполнение запросов

```php
$api = new Api(
    client: new TelegramBotApiClient($token),
    serializer: new Serializer(),
);

$me = $api->getMe();

assert($me instanceof User::class);
```

# Всё ещё work in progress
Основная проблема на данный момент - это загрузка файлов с MultiPart-запросами, но я думаю об этом.

Также мне нужно сделать придумать возвращаемый из Api::doRequest тип с помощью шаблонов,
но пока не уверен, как это сделать, phpstan побеждает.

# Заключение
Это просто SDK для вашего Telegram-бота, а не полноценный фреймворк,
вы можете использовать его как есть или расширить для своих нужд.

Если вам нужен фреймворк, посмотрите на [Phenogram](https://github.com/phenogram/framework)