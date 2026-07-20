**Русский** | [English](../en/getting-started.md)

# Начало работы

Это руководство описывает назначение Phenogram Bindings.
Оно также описывает первые шаги интеграции.

## Выберите подходящий пакет

| Пакет | Назначение |
|---|---|
| [`phenogram/bindings`](https://github.com/phenogram/bindings) | Типизированные методы и объекты Telegram Bot API |
| [`phenogram/framework`](https://github.com/phenogram/framework) | Маршруты бота, middleware, обработка обновлений и HTTP-клиент |
| [`phenogram/gateway-bindings`](https://github.com/phenogram/gateway-bindings) | Типизированные методы и объекты Telegram Gateway API |
| [`phenogram/scraper`](https://github.com/phenogram/scraper) | Генерация PHP-кода из документации Telegram Bot API |

Используйте этот пакет, если в приложении уже есть транспортный слой.
Используйте фреймворк, если нужна готовая среда выполнения бота.

Telegram Bot API и Telegram Gateway API являются разными продуктами.
Не используйте `gateway-bindings` для методов бота.

## Требования

Установите PHP 8.4 или более новую версию PHP 8.
Установите Composer 2.

У пакета нет сторонних зависимостей в рабочей среде.
Инструменты разработки используют отдельные зависимости Composer.

## Установка

Установите текущую стабильную версию:

```bash
composer require phenogram/bindings
```

Composer использует пространство имён `Phenogram\Bindings\` по стандарту PSR-4.
Автозагрузчик Composer загружает все классы пакета.

## Запуск примеров из репозитория

Для команд ниже нужны файлы из клона репозитория.
Подготовьте клон перед запуском:

```bash
git clone https://github.com/phenogram/bindings.git
cd bindings
composer install
```

## Создание данных запроса

Начните с сериализатора, если нужны только совместимые с Telegram данные.
Запустите полный пример:

```bash
php examples/01-serialize-keyboard.php
```

Пример создаёт объект `InlineKeyboardMarkup`.
Сериализатор заменяет имена PHP-свойств на имена полей Telegram.
Сериализатор удаляет значения `null`.

## Создание типизированных объектов

Используйте `Serializer::deserialize()` для декодированных данных результата Telegram.
Передайте интерфейс типа как целевой тип.

Запустите полный пример:

```bash
php examples/02-deserialize-update.php
```

Передавайте в сериализатор только значение `result` из ответа Telegram.
Не передавайте полную оболочку ответа.

## Вызов метода API

Реализуйте `ClientInterface` перед созданием `Api`.
Интерфейс содержит один метод:

```php
public function sendRequest(
    string $method,
    array $data,
): Phenogram\Bindings\Types\Interfaces\ResponseInterface;
```

Клиент отправляет запрос.
Клиент возвращает полную оболочку ответа Telegram.
Затем класс `Api` создаёт типизированный результат.

Запустите пример API без сети:

```bash
php examples/03-call-api.php
```

Пример использует `RecordingClient`.
Этот клиент предназначен для тестов.
Он не отправляет сетевой запрос.

Прочитайте [руководство по интеграции клиента](client-integration.md) перед созданием рабочего клиента.

## Обработка ошибки

`Api` выбрасывает `ResponseException`, если `ok` равно `false` или `result` равно `null`.
Получите ответ через `$exception->response`.

Запустите полный пример:

```bash
php examples/06-handle-api-error.php
```

Транспортные ошибки имеют другую природу.
Клиент должен выбрасывать своё транспортное исключение при ошибке соединения.

## Следующие шаги

Прочитайте [руководство по архитектуре](architecture.md), чтобы изучить точки расширения.
Прочитайте [руководство по тестированию](testing.md) перед добавлением примера.
Используйте [официальную документацию Telegram Bot API](https://core.telegram.org/bots/api) для проверки поведения методов.
