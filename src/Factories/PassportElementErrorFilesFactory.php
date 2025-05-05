<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PassportElementErrorFilesInterface;
use Phenogram\Bindings\Types\PassportElementErrorFiles;

class PassportElementErrorFilesFactory extends AbstractFactory
{
    /**
     * Creates a new PassportElementErrorFiles instance with default fake data.
     *
     * @param string|null $source     Optional. Error source, must be files
     * @param string|null $type       Optional. The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
     * @param array|null  $fileHashes Optional. List of base64-encoded file hashes
     * @param string|null $message    Optional. Error message
     */
    public static function make(
        ?string $source = null,
        ?string $type = null,
        ?array $fileHashes = null,
        ?string $message = null,
    ): PassportElementErrorFilesInterface {
        return self::factory()->makePassportElementErrorFiles(
            source: $source ?? self::fake()->text(50),
            type: $type ?? self::fake()->word(),
            fileHashes: $fileHashes ?? self::fake()->words(self::fake()->numberBetween(1, 5)),
            message: $message ?? self::fake()->text(50),
        );
    }
}
