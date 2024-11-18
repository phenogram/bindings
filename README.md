[🇬🇧 ENGLISH](README.en.md) | 🇷🇺 РУССКИЙ

# PHP типы для Telegram Bot API

Строго типизированные PHP классы для Telegram Bot API, основанные на [официальной документации](https://core.telegram.org/bots/api),
для использования в [Фреймворке Phenogram](https://github.com/phenogram/framework)

В основном сгенерированы с помощью [scrapper](https://github.com/phenogram/scraper)

Работа всё ещё в процессе, и не каждый класс протестирован или использовался.
Если вы обнаружите какие-либо несоответствия с документацией, не стесняйтесь создать ишью.
Всё, что не описано в документации, выходит за рамки этого проекта.

Текущая поддерживаемая версия Telegram bot API - **v8.0**

# Установка

```bash
composer require phenogram/bindings
```

# Использование

## Сериализатор
Пример использования можно увидеть в классе [Api](src/Api.php).

Вот простой пример:
```php
use Phenogram\Bindings\Serializer;

$serializer = new Serializer();
$inlineKeyboardMarkup = new InlineKeyboardMarkup(
    inlineKeyboard: [[
        new InlineKeyboardButton(text: 'Кнопка 1', callbackData: 'data1')
    ]],
);

$data = $serializer->serialize([
    'reply_markup' => $inlineKeyboardMarkup,
]);

$arrayKeyboard = [
    'reply_markup' => [
        'inline_keyboard' => [[
            ['text' => 'Кнопка 1', 'callback_data' => 'data1']
        ]],
    ],
];

assert($arrayKeyboard === $data);
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

> Обратите особое внимание на обработку InputFile.
> Вы можете пропустить эту часть и просто преобразовать запрос в json, если нет необходимости отправлять файлы,
> но это вызовет ужасное исключение, если вы действительно попытаетесь отправить файл.

Реализация клиента выходит за рамки этого проекта, но вы можете посмотреть
пример реализации с amphp/http-client в [Фреймворке Phenogram](https://github.com/phenogram/framework/blob/mother/src/TelegramBotApiClient.php)

Самая базовая реализация с использованием ext-curl может выглядеть так:

> Можете посмотреть его в действии в [тестах](tests/Feature/ReadmeClientTest.php))
```php
use Phenogram\Bindings\ClientInterface;
use Phenogram\Bindings\Types;

final readonly class ReadmeClient implements ClientInterface
{
    public function __construct(
        private string $token,
        private string $apiUrl = 'https://api.telegram.org',
    ) {
    }

    public function sendRequest(string $method, array $data): Types\Response
    {
        $ch = curl_init("{$this->apiUrl}/bot{$this->token}/{$method}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Проверка наличия InputFile объектов в $data и конвертация их в CURLFile
        foreach ($data as $key => $value) {
            if ($value instanceof Types\InputFile) {
                if (file_exists($value->filePath)) {
                    $data[$key] = new \CURLFile($value->filePath);
                } else {
                    throw new \RuntimeException("Файл не найден: {$value->filePath}");
                }
            }
        }

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

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
Также нужно придумать возвращаемый из Api::doRequest тип с помощью шаблонов,
но пока не уверен, как это сделать и phpstan побеждает.

# Заключение
Это просто SDK для вашего Telegram-бота, а не полноценный фреймворк,
вы можете использовать его как есть или расширить для своих нужд.

Если вам нужен фреймворк, посмотрите на [Phenogram](https://github.com/phenogram/framework)