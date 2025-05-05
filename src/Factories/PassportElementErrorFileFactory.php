<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PassportElementErrorFileInterface;
use Phenogram\Bindings\Types\PassportElementErrorFile;

class PassportElementErrorFileFactory extends AbstractFactory
{
    /**
     * Creates a new PassportElementErrorFile instance with default fake data.
     *
     * @param string|null $source   Optional. Error source, must be file
     * @param string|null $type     Optional. The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
     * @param string|null $fileHash Optional. Base64-encoded file hash
     * @param string|null $message  Optional. Error message
     */
    public static function make(
        ?string $source = null,
        ?string $type = null,
        ?string $fileHash = null,
        ?string $message = null,
    ): PassportElementErrorFileInterface {
        return self::factory()->makePassportElementErrorFile(
            source: $source ?? self::fake()->text(50),
            type: $type ?? self::fake()->word(),
            fileHash: $fileHash ?? self::fake()->sha1(),
            message: $message ?? self::fake()->text(50),
        );
    }
}
