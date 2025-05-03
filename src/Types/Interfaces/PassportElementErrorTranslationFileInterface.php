<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents an issue with one of the files that constitute the translation of a document. The error is considered resolved when the file changes.
 */
interface PassportElementErrorTranslationFileInterface extends TypeInterface
{
    /** @var string $source Error source, must be translation_file */
    public string $source { set; get; }

    /** @var string $type Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration” */
    public string $type { set; get; }

    /** @var string $fileHash Base64-encoded file hash */
    public string $fileHash { set; get; }

    /** @var string $message Error message */
    public string $message { set; get; }
}
