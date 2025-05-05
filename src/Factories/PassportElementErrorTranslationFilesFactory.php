<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PassportElementErrorTranslationFilesInterface;
use Phenogram\Bindings\Types\PassportElementErrorTranslationFiles;

class PassportElementErrorTranslationFilesFactory extends AbstractFactory
{
    /**
     * Creates a new PassportElementErrorTranslationFiles instance with default fake data.
     *
     * @param string|null $source     Optional. Error source, must be translation_files
     * @param string|null $type       Optional. Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
     * @param array|null  $fileHashes Optional. List of base64-encoded file hashes
     * @param string|null $message    Optional. Error message
     */
    public static function make(
        ?string $source = null,
        ?string $type = null,
        ?array $fileHashes = null,
        ?string $message = null,
    ): PassportElementErrorTranslationFilesInterface {
        return self::factory()->makePassportElementErrorTranslationFiles(
            source: $source ?? self::fake()->text(50),
            type: $type ?? self::fake()->word(),
            fileHashes: $fileHashes ?? self::fake()->words(self::fake()->numberBetween(1, 5)),
            message: $message ?? self::fake()->text(50),
        );
    }
}
