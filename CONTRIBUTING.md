[Русский](CONTRIBUTING.ru.md) | **English**

# Contributing

Thank you for improving Phenogram Bindings.
Keep each change small and verifiable.

## Before you start

Search the existing issues.
Describe a large change before you implement it.
Use the [official Telegram Bot API documentation](https://core.telegram.org/bots/api) as the schema source.

Do not include a bot token in a test, fixture, log, or commit.

## Generated files

Most API, type, serializer, and factory files are generated.
The [`phenogram/scraper`](https://github.com/phenogram/scraper) project maintains the generator.

Identify generated files before you edit them.
Update the generator when a schema change affects many files.
Document the Telegram Bot API version that supplies the change.

## Documentation language

Keep the English and Russian documents equivalent.
Update both language versions in one change.

Use controlled English in English documents:

- Use one term for one meaning.
- Use short sentences.
- Use active voice.
- Put one instruction in each sentence.
- Use an imperative verb for an instruction.
- Do not use an unexplained abbreviation.
- Do not use a synonym only for style.

These rules follow the purpose of [ASD-STE100](https://www.asd-ste100.org/about_STE.html).
Project-specific API names remain valid technical terms.

## Examples

Put runnable scripts in `examples`.
Make each script work without a bot token.
Use fixed data for each checked value.
Throw an exception when the result is incorrect.
Add the script to `tests/Examples/ExamplesTest.php`.
Document the script in both example indexes.

Keep live examples out of the default test path.

## Tests

Install development dependencies:

```bash
composer install
composer tools:install
```

Run the required checks:

```bash
for file in examples/[0-9][0-9]-*.php; do php "$file"; done
vendor/bin/phpunit
composer phpstan
composer lint:composer
```

Run the style check:

```bash
tools/php-cs-fixer/vendor/bin/php-cs-fixer fix \
--dry-run \
--diff \
--sequential \
--config=.php-cs-fixer.php \
--allow-risky=yes
```

Explain a skipped check in the pull request.
Do not hide a failing check.

## Pull requests

Use a clear title.
Explain the user-visible effect.
List the verification commands.
Link the relevant Telegram change.
Call out a compatibility change.
Keep unrelated formatting out of the diff.

By contributing, you agree that your contribution uses the repository MIT License.
