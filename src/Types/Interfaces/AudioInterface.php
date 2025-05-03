<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents an audio file to be treated as music by the Telegram clients.
 */
interface AudioInterface extends TypeInterface
{
    /** @var string $fileId Identifier for this file, which can be used to download or reuse the file */
    public string $fileId { set; get; }

    /** @var string $fileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $fileUniqueId { set; get; }

    /** @var int $duration Duration of the audio in seconds as defined by the sender */
    public int $duration { set; get; }

    /** @var string|null $performer Optional. Performer of the audio as defined by the sender or by audio tags */
    public ?string $performer { set; get; }

    /** @var string|null $title Optional. Title of the audio as defined by the sender or by audio tags */
    public ?string $title { set; get; }

    /** @var string|null $fileName Optional. Original filename as defined by the sender */
    public ?string $fileName { set; get; }

    /** @var string|null $mimeType Optional. MIME type of the file as defined by the sender */
    public ?string $mimeType { set; get; }

    /** @var int|null $fileSize Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value. */
    public ?int $fileSize { set; get; }

    /** @var PhotoSizeInterface|null $thumbnail Optional. Thumbnail of the album cover to which the music file belongs */
    public ?PhotoSizeInterface $thumbnail { set; get; }
}
