<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents an issue with the selfie with a document. The error is considered resolved when the file with the selfie changes.
 */
interface PassportElementErrorSelfieInterface extends TypeInterface
{
    /** @var string $source Error source, must be selfie */
    public string $source { set; }

    /** @var string $type The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport” */
    public string $type { set; }

    /** @var string $fileHash Base64-encoded hash of the file with the selfie */
    public string $fileHash { set; }

    /** @var string $message Error message */
    public string $message { set; }
}
