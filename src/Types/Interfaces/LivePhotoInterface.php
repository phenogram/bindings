<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a live photo.
 */
interface LivePhotoInterface extends TypeInterface
{
    /** @var array<PhotoSizeInterface>|null $photo Optional. Available sizes of the corresponding static photo */
    public ?array $photo { set; get; }

    /** @var string $fileId Identifier for the video file which can be used to download or reuse the file */
    public string $fileId { set; get; }

    /** @var string $fileUniqueId Unique identifier for the video file which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $fileUniqueId { set; get; }

    /** @var int $width Video width as defined by the sender */
    public int $width { set; get; }

    /** @var int $height Video height as defined by the sender */
    public int $height { set; get; }

    /** @var int $duration Duration of the video in seconds as defined by the sender */
    public int $duration { set; get; }

    /** @var string|null $mimeType Optional. MIME type of the file as defined by the sender */
    public ?string $mimeType { set; get; }

    /** @var int|null $fileSize Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value. */
    public ?int $fileSize { set; get; }
}
