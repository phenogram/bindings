<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
 */
interface PassportElementErrorDataFieldInterface extends TypeInterface
{
    /** @var string $source Error source, must be data */
    public string $source { set; }

    /** @var string $type The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address” */
    public string $type { set; }

    /** @var string $fieldName Name of the data field which has the error */
    public string $fieldName { set; }

    /** @var string $dataHash Base64-encoded data hash */
    public string $dataHash { set; }

    /** @var string $message Error message */
    public string $message { set; }
}
