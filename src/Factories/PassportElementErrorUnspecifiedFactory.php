<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PassportElementErrorUnspecifiedInterface;
use Phenogram\Bindings\Types\PassportElementErrorUnspecified;

class PassportElementErrorUnspecifiedFactory extends AbstractFactory
{
    /**
     * Creates a new PassportElementErrorUnspecified instance with default fake data.
     *
     * @param string|null $source      Optional. Error source, must be unspecified
     * @param string|null $type        Optional. Type of element of the user's Telegram Passport which has the issue
     * @param string|null $elementHash Optional. Base64-encoded element hash
     * @param string|null $message     Optional. Error message
     */
    public static function make(
        ?string $source = null,
        ?string $type = null,
        ?string $elementHash = null,
        ?string $message = null,
    ): PassportElementErrorUnspecifiedInterface {
        return self::factory()->makePassportElementErrorUnspecified(
            source: $source ?? self::fake()->text(50),
            type: $type ?? self::fake()->word(),
            elementHash: $elementHash ?? self::fake()->sha1(),
            message: $message ?? self::fake()->text(50),
        );
    }
}
