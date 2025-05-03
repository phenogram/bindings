<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents an issue with a document scan. The error is considered resolved when the file with the document scan changes.
 */
interface PassportElementErrorFileInterface extends TypeInterface
{
    /** @var string $source Error source, must be file */
    public string $source { set; get; }

    /** @var string $type The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration” */
    public string $type { set; get; }

    /** @var string $fileHash Base64-encoded file hash */
    public string $fileHash { set; get; }

    /** @var string $message Error message */
    public string $message { set; get; }
}
