[🇬🇧 ENGLISH](README.en.md) | 🇷🇺 РУССКИЙ

# PHP SDK для Telegram Bot API

Строго типизированные PHP классы для Telegram Bot API, основанные на [официальной документации](https://core.telegram.org/bots/api),
для использования в [Фреймворке Phenogram](https://github.com/phenogram/framework)

Этот пакет подойдёт тем, кому нужна только отправка запросов в апи, без работы с апдейтами.

В основном сгенерированы с помощью [scrapper](https://github.com/phenogram/scraper)

Работа всё ещё в процессе, и не каждый класс протестирован или использовался.
Если вы обнаружите какие-либо несоответствия с документацией, не стесняйтесь создать ишью.
Всё, что не описано в официальной документации Telegram Bot Api, выходит за рамки этого проекта.

Текущая поддерживаемая версия Telegram bot API - **v8.0**

Это только SDK для вашего Telegram-бота, а не полноценный фреймворк,
вы можете использовать его целиком, либо только нужные вам куски.

Если вам нужен фреймворк, посмотрите на [Phenogram](https://github.com/phenogram/framework)

# Установка

```bash
composer require phenogram/bindings
```

# Использование
Этот пакет состоит из 3 основных частей: api, сериализатор и фабрика.

Через [Api](src/Api.php) вы будете отправлять запросы к api ботов

[Сериализатор](src/Serializer.php) отвечает за преобразование объектов в массивы для отправки клиентов и
за преобразование ответов от api обратно в строго типизированные объекты.

Все типы реализованы в виде интерфейсов с пропертями
(благодаря [новой фиче PHP 8.4](https://www.php.net/manual/ru/migration84.new-features.php#migration84.new-features.core.property-hooks)),
что позволяет вам с лёгкостью их переопределить при необходимости.

[Фабрика](src/Factory.php) существует как раз для облегчения переопределения типов,
именно она используется в сериализациторе и отвечает за создание конкретных объектов.

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

## Использование API

### Клиент
Чтобы использовать API, вам сначала нужно реализовать интерфейс ClientInterface,
в котором есть только один метод - `sendRequest`.

> Обратите особое внимание на обработку InputFile.
> Вы можете пропустить эту часть и просто преобразовать запрос в json, если нет необходимости отправлять файлы,
> но это вызовет ужасное исключение, если вы действительно попытаетесь отправить файл.

Реализация клиента выходит за рамки этого проекта,
но вот пример реализации с использованием ext-curl:

> Можете посмотреть его в действии в [тестах](tests/Readme/ReadmeClientTest.php))
```php
<?php

declare(strict_types=1);

namespace Phenogram\Bindings\Tests\Readme;

use Phenogram\Bindings\ClientInterface;
use Phenogram\Bindings\Types;

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
            if ($value instanceof Types\Interfaces\InputFileInterface) {
                if (file_exists($value->filePath)) {
                    $data[$key] = new \CURLFile($value->filePath);
                } else {
                    throw new \RuntimeException("File not found: {$value->filePath}");
                }
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

Но я, конечно, рекомендую использовать какую-нибудь библиотеку, например Guzzle или amphp/http-client.
Пример реализации с amphp/http-client есть в [Фреймворке Phenogram](https://github.com/phenogram/framework/blob/mother/src/TelegramBotApiClient.php)

### Выполнение запросов

```php
$api = new Api(
    client: new TelegramBotApiClient($token),
    serializer: new Serializer(),
);

$me = $api->getMe();

assert($me instanceof User::class);
```

### Переопределение типов
Скажем, вы хотите использовать свою реализацию ChatLocationInterface вместо стандартной,
чтобы адрес всегда был в верхнем регистре.

Первое, что вам нужно - это новый класс, реализующий интерфейс ChatLocationInterface. 
Для простоты мы унаследуемся от нашего класса ChatLocation.

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

Далее нам нужно переопределить фабрику, чтобы она создавала наш новый класс вместо стандартного.

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

И последнее - создать и использовать объект Api с сериализатором, который использует нашу фабрику: 
```php
$api = new Api(
    client: new TelegramBotApiClient($token),
    serializer: new Serializer(
        factory: new MyFactory()
    ),
);
```

> Посмотреть на это можно в [тесте](tests/Readme/ReadmeFactoryTest.php)

# Заключение
Хоть я уже и во всю использую и эти классы и [фреймворк](https://github.com/phenogram/framework) в продакшене в своих проектах
[систент](https://t.me/sistent_bot), [мистаро](https://t.me/mystaro_bot) и [генерач](https://t.me/genera4_bot),
но этот проект всё равно находится в активно разработке и предоставляется как есть.

Тестируйте самостоятельно!