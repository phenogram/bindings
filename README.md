[🇬🇧 ENGLISH](README.en.md) | 🇷🇺 РУССКИЙ

# PHP SDK для Telegram Bot API

Строго типизированные PHP классы для Telegram Bot API, основанные на [официальной документации](https://core.telegram.org/bots/api),
для использования в [Фреймворке Phenogram](https://github.com/phenogram/framework)

Этот пакет подойдёт тем, кому нужна только отправка запросов в апи, без работы с апдейтами.

В основном сгенерированы с помощью [scrapper](https://github.com/phenogram/scraper)

Работа всё ещё в процессе, и не каждый класс протестирован или использовался.
Если вы обнаружите какие-либо несоответствия с документацией, не стесняйтесь создать ишью.
Всё, что не описано в официальной документации Telegram Bot Api, выходит за рамки этого проекта.

Текущая поддерживаемая версия Telegram bot API - **v9.1.0**

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

> Обратите особое внимание на обработку файлов.
> В библиотеке отсутствует реализация InputFileInterface,
> как вы читаете и отправляете файлы зависит от вашего клиента.

Реализация клиента выходит за рамки этого проекта,
но вот пример реализации с использованием ext-curl:

> Можете посмотреть его в действии в [тестах](tests/Readme/ReadmeClientTest.php))
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

## Тестовые фабрики

Для упрощения написания тестов, этот пакет также включает набор **Тестовых Фабрик**.
Они используют [FakerPHP](https://github.com/FakerPHP/Faker) для генерации объектов типов Telegram API со случайными данными.

Каждому *конкретному* типу API (например, `User`, `Chat`, `Message`) соответствует своя фабрика: `UserFactory`, `ChatFactory`, `MessageFactory` и т.д.

**Пример использования:**

```php
<?php

use Phenogram\Bindings\Factories\UserFactory;
use Phenogram\Bindings\Factories\MessageFactory;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;

// Создать пользователя со случайными данными
$randomUser = UserFactory::make();
assert($randomUser instanceof UserInterface);
echo "Создан пользователь: ID=" . $randomUser->id . ", Имя=" . $randomUser->firstName . "\n";

// Создать другого пользователя, указав ID и флаг бота
$specificBot = UserFactory::make(id: 12345, isBot: true);
echo "Создан бот: ID=" . $specificBot->id . ", Имя=" . $specificBot->firstName . "\n";

// Создать сообщение, указав некоторые параметры и оставив остальные случайными
$messageFromBot = MessageFactory::make(
    from: UserFactory::make(
        isBot: true,
        firstName: 'MyTestBot'
    ), // Вложенный вызов фабрики
    text: 'Привет из теста!'
);
assert($messageFromBot instanceof MessageInterface);
echo "ID сообщения: " . $messageFromBot->messageId . "\n";
echo "Текст: " . $messageFromBot->text . "\n";
echo "Отправитель: " . $messageFromBot->from->firstName . "\n";
echo "ID чата: " . $messageFromBot->chat->id . "\n"; // Chat также сгенерирован автоматически

// Создать массив случайных сущностей сообщения (MessageEntity)
use Phenogram\Bindings\Factories\MessageEntityFactory;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

$entities = array_map(fn() => MessageEntityFactory::make(), range(1, 3));
assert(is_array($entities));
assert($entities[0] instanceof MessageEntityInterface);
echo "Сгенерировано сущностей: " . count($entities) . "\n";
echo "Тип первой сущности: " . $entities[0]->type . "\n";

```

* Все тестовые фабрики наследуются от `Phenogram\Bindings\Factories\AbstractFactory`.
* Вы можете передать конкретные значения в статический метод `make()` фабрики, чтобы переопределить сгенерированные Faker данные для нужных полей.
* Если для какого-либо параметра метода `make()` значение не передано (`null`), фабрика сгенерирует для него случайное значение, подходящее по типу и (иногда) по названию поля.
* Фабрики генерируются только для *конкретных* типов Telegram API (например, `User`, `Chat`, `ChatMemberOwner`).
Для создания экземпляров, представляющих абстрактные типы в ваших тестах (например, `ChatMember`), 
вам нужно будет вызвать фабрику одного из его конкретных наследников
(например, `ChatMemberOwnerFactory::make()` или `ChatMemberAdministratorFactory::make()`).
* Необязательные параметры не генерируются автоматически и по умолчанию будут `null`

Также вы можете использовать свою фабрику классов для создания тестовые объектов,
для этого перед созданием первого тестового объекта, переопределите фабрику через:
```php
\Phenogram\Bindings\Factories\AbstractFactory::setFactory(new MyFactory());
```

# Заключение
Хоть я уже и во всю использую и эти классы и [фреймворк](https://github.com/phenogram/framework) в продакшене в своих проектах
[систент](https://t.me/sistent_bot), [мистаро](https://t.me/mystaro_bot) и [генерач](https://t.me/genera4_bot),
но этот проект всё равно находится в активно разработке и предоставляется как есть.

Тестируйте самостоятельно!