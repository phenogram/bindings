<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 */
interface DocumentInterface extends TypeInterface
{
    /** @var string $fileId Identifier for this file, which can be used to download or reuse the file */
    public string $fileId { set; }

    /** @var string $fileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $fileUniqueId { set; }

    /** @var PhotoSizeInterface|null $thumbnail Optional. Document thumbnail as defined by the sender */
    public ?PhotoSizeInterface $thumbnail { set; }

    /** @var string|null $fileName Optional. Original filename as defined by the sender */
    public ?string $fileName { set; }

    /** @var string|null $mimeType Optional. MIME type of the file as defined by the sender */
    public ?string $mimeType { set; }

    /** @var int|null $fileSize Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value. */
    public ?int $fileSize { set; }
}
