<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PassportElementErrorReverseSideInterface;
use Phenogram\Bindings\Types\PassportElementErrorReverseSide;

class PassportElementErrorReverseSideFactory extends AbstractFactory
{
    /**
     * Creates a new PassportElementErrorReverseSide instance with default fake data.
     *
     * @param string|null $source   Optional. Error source, must be reverse_side
     * @param string|null $type     Optional. The section of the user's Telegram Passport which has the issue, one of “driver_license”, “identity_card”
     * @param string|null $fileHash Optional. Base64-encoded hash of the file with the reverse side of the document
     * @param string|null $message  Optional. Error message
     */
    public static function make(
        ?string $source = null,
        ?string $type = null,
        ?string $fileHash = null,
        ?string $message = null,
    ): PassportElementErrorReverseSideInterface {
        return self::factory()->makePassportElementErrorReverseSide(
            source: $source ?? self::fake()->text(50),
            type: $type ?? self::fake()->word(),
            fileHash: $fileHash ?? self::fake()->sha1(),
            message: $message ?? self::fake()->text(50),
        );
    }
}
