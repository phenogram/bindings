**Русский** | [English](README.md)

# Phenogram Bindings

[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777BB4?logo=php&logoColor=white)](https://www.php.net/releases/8.4/en.php)
[![Telegram Bot API 10.2](https://img.shields.io/badge/Telegram_Bot_API-10.2-26A5E4?logo=telegram&logoColor=white)](https://core.telegram.org/bots/api)
[![CI](https://github.com/phenogram/bindings/actions/workflows/ci.yaml/badge.svg)](https://github.com/phenogram/bindings/actions/workflows/ci.yaml)
[![Packagist](https://img.shields.io/packagist/v/phenogram/bindings?label=Packagist)](https://packagist.org/packages/phenogram/bindings)
[![Лицензия: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

Строго типизированные PHP-привязки к Telegram Bot API без сторонних зависимостей.

Пакет предоставляет типизированные методы API, сериализацию запросов, десериализацию ответов и заменяемые фабрики объектов.
Пакет не выбирает HTTP-клиент.
Пакет не запускает цикл обработки бота.

Используйте [Phenogram Framework](https://github.com/phenogram/framework), если нужны маршруты, middleware и обработка обновлений.

## Совместимость

| Компонент | Поддерживаемая версия |
|---|---|
| Пакет | `9.x` |
| Telegram Bot API | `10.2` |
| PHP | `^8.4` |
| Сторонние пакеты в рабочей среде | Нет |

Код использует [property hooks из PHP](https://www.php.net/manual/ru/language.oop5.property-hooks.php).
Поэтому требуется PHP 8.4.

## Установка

```bash
composer require phenogram/bindings
```

## Быстрый старт

Используйте `Serializer`, чтобы создать данные для Telegram:

```php
<?php

declare(strict_types=1);

use Phenogram\Bindings\Serializer;
use Phenogram\Bindings\Types\InlineKeyboardButton;
use Phenogram\Bindings\Types\InlineKeyboardMarkup;

require __DIR__ . '/vendor/autoload.php';

$payload = (new Serializer())->serialize([
    'chatId' => 42,
    'text' => 'Выберите действие.',
    'replyMarkup' => new InlineKeyboardMarkup(
        inlineKeyboard: [[
            new InlineKeyboardButton(
                text: 'Открыть документацию',
                url: 'https://core.telegram.org/bots/api',
            ),
        ]],
    ),
]);
```

Сериализатор заменяет `chatId` на `chat_id`.
Он преобразует типизированные объекты во вложенные массивы.
Он удаляет значения `null`.

Используйте `Api`, когда в приложении есть реализация `ClientInterface`.
Клиент отправляет HTTP-запрос.
Клиент возвращает полную оболочку ответа Telegram.

Для команд с примерами ниже нужен клон репозитория и команда `composer install`.
Запустите проверенный пример API:

```bash
php examples/03-call-api.php
```

Запустите проверенные примеры без сети:

```bash
for file in examples/[0-9][0-9]-*.php; do php "$file"; done
```

## Состав пакета

| Часть | Назначение |
|---|---|
| [`ApiInterface`](src/ApiInterface.php) | Определяет все поддерживаемые методы Telegram. |
| [`Api`](src/Api.php) | Сериализует запросы и создаёт типизированные результаты. |
| [`ClientInterface`](src/ClientInterface.php) | Подключает привязки к HTTP-транспорту. |
| [`SerializerInterface`](src/SerializerInterface.php) | Определяет сериализацию и десериализацию. |
| [`Serializer`](src/Serializer.php) | Преобразует данные Telegram в PHP-типы. |
| [`FactoryInterface`](src/FactoryInterface.php) | Определяет конструкторы всех типов результата. |
| [`Factory`](src/Factory.php) | Создаёт стандартные объекты результата. |
| [`Types`](src/Types) | Содержит конкретные типы и их интерфейсы. |
| [`Factories`](src/Factories) | Создаёт тестовые фикстуры через Faker. |

Тестовым фабрикам нужен пакет `fakerphp/faker`.
Приложение не получает этот пакет из зависимостей разработки библиотеки.
Установите его в приложение, которое использует фабрики:

```bash
composer require --dev fakerphp/faker
```

## Документация

| Руководство | Содержание |
|---|---|
| [Начало работы](docs/ru/getting-started.md) | Назначение, установка и первое использование |
| [Архитектура](docs/ru/architecture.md) | Поток запроса, точки расширения и структура пакета |
| [Интеграция клиента](docs/ru/client-integration.md) | Контракт транспорта, файлы, ошибки и безопасность |
| [Тестирование](docs/ru/testing.md) | Примеры без сети, фикстуры и рабочие тесты |
| [Исполняемые примеры](examples/README.ru.md) | Шесть скриптов, которые работают без токена бота |

[Официальная документация Telegram Bot API](https://core.telegram.org/bots/api) является главным источником информации о поведении Telegram.
Используйте `ApiInterface` как локальный источник поддерживаемых сигнатур PHP-методов.

## Обработка ошибок

`Api` выбрасывает `ResponseException`, когда `ok` равно `false` или `result` равно `null`.
Исключение содержит полный объект `ResponseInterface`.

```bash
php examples/06-handle-api-error.php
```

## Разработка

Установите зависимости пакета для разработки:

```bash
composer install
composer tools:install
```

Репозиторий не хранит корневой файл `composer.lock`.
Composer разрешает корневые зависимости для разработки по ограничениям версий.
Отдельные проекты инструментов хранят lock-файлы для PHPStan и PHP CS Fixer.

Запустите тесты без сети:

```bash
vendor/bin/phpunit
```

Запустите статический анализ:

```bash
composer phpstan
```

Запустите все проверки репозитория:

```bash
composer check
```

Прочитайте [CONTRIBUTING.ru.md](CONTRIBUTING.ru.md) перед отправкой изменений.
Сообщайте о проблемах безопасности по правилам из [SECURITY.md](SECURITY.md).
Используйте [SUPPORT.md](SUPPORT.md) для запросов поддержки.

## Лицензия

Phenogram Bindings доступен по [лицензии MIT](LICENSE).
