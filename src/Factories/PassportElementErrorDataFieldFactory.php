<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PassportElementErrorDataFieldInterface;
use Phenogram\Bindings\Types\PassportElementErrorDataField;

class PassportElementErrorDataFieldFactory extends AbstractFactory
{
    /**
     * Creates a new PassportElementErrorDataField instance with default fake data.
     *
     * @param string|null $source    Optional. Error source, must be data
     * @param string|null $type      Optional. The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
     * @param string|null $fieldName Optional. Name of the data field which has the error
     * @param string|null $dataHash  Optional. Base64-encoded data hash
     * @param string|null $message   Optional. Error message
     */
    public static function make(
        ?string $source = null,
        ?string $type = null,
        ?string $fieldName = null,
        ?string $dataHash = null,
        ?string $message = null,
    ): PassportElementErrorDataFieldInterface {
        return self::factory()->makePassportElementErrorDataField(
            source: $source ?? self::fake()->text(50),
            type: $type ?? self::fake()->word(),
            fieldName: $fieldName ?? self::fake()->text(50),
            dataHash: $dataHash ?? self::fake()->sha1(),
            message: $message ?? self::fake()->text(50),
        );
    }
}
