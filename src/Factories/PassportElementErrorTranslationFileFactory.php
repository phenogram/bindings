<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PassportElementErrorTranslationFileInterface;
use Phenogram\Bindings\Types\PassportElementErrorTranslationFile;

class PassportElementErrorTranslationFileFactory extends AbstractFactory
{
    /**
     * Creates a new PassportElementErrorTranslationFile instance with default fake data.
     *
     * @param string|null $source   Optional. Error source, must be translation_file
     * @param string|null $type     Optional. Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
     * @param string|null $fileHash Optional. Base64-encoded file hash
     * @param string|null $message  Optional. Error message
     */
    public static function make(
        ?string $source = null,
        ?string $type = null,
        ?string $fileHash = null,
        ?string $message = null,
    ): PassportElementErrorTranslationFileInterface {
        return self::factory()->makePassportElementErrorTranslationFile(
            source: $source ?? self::fake()->text(50),
            type: $type ?? self::fake()->word(),
            fileHash: $fileHash ?? self::fake()->sha1(),
            message: $message ?? self::fake()->text(50),
        );
    }
}
