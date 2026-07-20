# Исполняемые примеры

[English](README.md)

Каждый пример работает без токена бота.
Каждый пример использует фиксированные данные.
Тесты запускают все примеры.

Для этих команд нужны файлы из клона репозитория.
Выполните `composer install` в корне пакета перед запуском примера.

Запустите один пример из корня пакета:

```bash
php examples/01-serialize-keyboard.php
```

Запустите все примеры:

```bash
for file in examples/[0-9][0-9]-*.php; do php "$file"; done
```

| Файл | Назначение |
|---|---|
| [`01-serialize-keyboard.php`](01-serialize-keyboard.php) | Преобразует PHP-объекты и ключи `camelCase` в данные Telegram. |
| [`02-deserialize-update.php`](02-deserialize-update.php) | Преобразует данные обновления в типизированные PHP-объекты. |
| [`03-call-api.php`](03-call-api.php) | Вызывает `Api` с детерминированным клиентом. |
| [`04-custom-type.php`](04-custom-type.php) | Заменяет тип результата своей реализацией. |
| [`05-test-factories.php`](05-test-factories.php) | Создаёт детерминированную тестовую фикстуру. |
| [`06-handle-api-error.php`](06-handle-api-error.php) | Проверяет ошибочный ответ Telegram. |

`RecordingClient` предназначен только для тестов.
Он не отправляет HTTP-запросы.
Прочитайте [руководство по интеграции клиента](../docs/ru/client-integration.md) перед созданием рабочего клиента.
