<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PassportElementErrorFrontSideInterface;
use Phenogram\Bindings\Types\PassportElementErrorFrontSide;

class PassportElementErrorFrontSideFactory extends AbstractFactory
{
    /**
     * Creates a new PassportElementErrorFrontSide instance with default fake data.
     *
     * @param string|null $source   Optional. Error source, must be front_side
     * @param string|null $type     Optional. The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
     * @param string|null $fileHash Optional. Base64-encoded hash of the file with the front side of the document
     * @param string|null $message  Optional. Error message
     */
    public static function make(
        ?string $source = null,
        ?string $type = null,
        ?string $fileHash = null,
        ?string $message = null,
    ): PassportElementErrorFrontSideInterface {
        return self::factory()->makePassportElementErrorFrontSide(
            source: $source ?? self::fake()->text(50),
            type: $type ?? self::fake()->word(),
            fileHash: $fileHash ?? self::fake()->sha1(),
            message: $message ?? self::fake()->text(50),
        );
    }
}
