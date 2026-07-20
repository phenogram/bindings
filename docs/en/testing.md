[Русский](../ru/testing.md) | **English**

# Testing

The default test suite does not need a bot token.
It does not send a network request.

## Install development dependencies

Run this command from the package root:

```bash
composer install
composer tools:install
```

The repository does not track the root `composer.lock` file.
Composer resolves the root development dependencies from the version constraints.
The separate tool projects track lock files for PHPStan and PHP CS Fixer.
These lock files do not change dependency resolution for package consumers.

## Run PHPUnit

Run the complete offline suite:

```bash
vendor/bin/phpunit
```

The suite covers serializer behavior.
It covers custom result types.
It also runs each file in `examples` as a separate PHP process.

## Run examples

Run one example:

```bash
php examples/03-call-api.php
```

Run all examples:

```bash
for file in examples/[0-9][0-9]-*.php; do php "$file"; done
```

Each example uses fixed input.
Each example validates its own result.
Each example exits with a nonzero status after a failed validation.

Do not add a documentation example that needs a real bot.
Use `RecordingClient` for API examples.
Add the example to `ExamplesTest`.

## Use test factories

The generated factories use `fakerphp/faker`.
An application does not install library development dependencies.
Install Faker in an application that uses the factories:

```bash
composer require --dev fakerphp/faker
```

Specify all values that a test checks.
Let Faker create only values that the test does not check.

Run the factory example:

```bash
php examples/05-test-factories.php
```

Set a custom object factory before the first fixture is created:

```php
Phenogram\Bindings\Factories\AbstractFactory::setFactory($factory);
```

`AbstractFactory` rejects a second factory assignment.
Set the factory once for each PHP process.

## Run live Telegram tests

Live tests are opt-in.
They can send a document to a real chat.

Set the required values in your environment:

```bash
RUN_TELEGRAM_INTEGRATION=1 \
TELEGRAM_BOT_TOKEN='<token>' \
TEST_CHAT_ID='<chat-id>' \
vendor/bin/phpunit tests/Readme/ReadmeClientTest.php
```

Use a dedicated test bot.
Use a dedicated test chat.
Do not use a production token.
Revoke a token immediately after an accidental disclosure.

The default suite skips these tests.
The opt-in flag prevents accidental network calls from a local `.env` file.

## Run static analysis

Run PHPStan:

```bash
composer phpstan
```

The current configuration checks `src` at level 5.
It excludes the serializer files.
Treat this exclusion as technical debt.

## Check code style

Run a dry check:

```bash
tools/php-cs-fixer/vendor/bin/php-cs-fixer fix \
--dry-run \
--diff \
--sequential \
--config=.php-cs-fixer.php \
--allow-risky=yes
```

Run the configured fixer:

```bash
composer fix
```

Inspect the diff after an automatic fix.
Generated files can produce a large diff.

## Check a change

Complete these checks before you send a change:

1. Run all executable examples.
2. Run PHPUnit.
3. Run PHPStan.
4. Run the style check.
5. Run `composer lint:composer`.
6. Confirm that English and Russian documentation have the same scope.
