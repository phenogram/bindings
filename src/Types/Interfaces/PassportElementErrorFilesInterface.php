<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing the scans changes.
 */
interface PassportElementErrorFilesInterface extends TypeInterface
{
    /** @var string $source Error source, must be files */
    public string $source { set; }

    /** @var string $type The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration” */
    public string $type { set; }

    /** @var array<string> $fileHashes List of base64-encoded file hashes */
    public array $fileHashes { set; }

    /** @var string $message Error message */
    public string $message { set; }
}
