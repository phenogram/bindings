<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a voice note.
 */
interface VoiceInterface extends TypeInterface
{
    /** @var string $fileId Identifier for this file, which can be used to download or reuse the file */
    public string $fileId { set; }

    /** @var string $fileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $fileUniqueId { set; }

    /** @var int $duration Duration of the audio in seconds as defined by the sender */
    public int $duration { set; }

    /** @var string|null $mimeType Optional. MIME type of the file as defined by the sender */
    public ?string $mimeType { set; }

    /** @var int|null $fileSize Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value. */
    public ?int $fileSize { set; }
}
