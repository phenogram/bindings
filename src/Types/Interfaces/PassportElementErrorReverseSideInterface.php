<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents an issue with the reverse side of a document. The error is considered resolved when the file with reverse side of the document changes.
 */
interface PassportElementErrorReverseSideInterface extends TypeInterface
{
    /** @var string $source Error source, must be reverse_side */
    public string $source { set; get; }

    /** @var string $type The section of the user's Telegram Passport which has the issue, one of “driver_license”, “identity_card” */
    public string $type { set; get; }

    /** @var string $fileHash Base64-encoded hash of the file with the reverse side of the document */
    public string $fileHash { set; get; }

    /** @var string $message Error message */
    public string $message { set; get; }
}
