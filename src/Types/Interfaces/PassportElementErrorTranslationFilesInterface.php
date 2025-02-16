<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents an issue with the translated version of a document. The error is considered resolved when a file with the document translation change.
 */
interface PassportElementErrorTranslationFilesInterface extends TypeInterface
{
    /** @var string $source Error source, must be translation_files */
    public string $source { set; }

    /** @var string $type Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration” */
    public string $type { set; }

    /** @var array<string> $fileHashes List of base64-encoded file hashes */
    public array $fileHashes { set; }

    /** @var string $message Error message */
    public string $message { set; }
}
