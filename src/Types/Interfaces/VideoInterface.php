<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a video file.
 */
interface VideoInterface extends TypeInterface
{
    /** @var string $fileId Identifier for this file, which can be used to download or reuse the file */
    public string $fileId { set; get; }

    /** @var string $fileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $fileUniqueId { set; get; }

    /** @var int $width Video width as defined by the sender */
    public int $width { set; get; }

    /** @var int $height Video height as defined by the sender */
    public int $height { set; get; }

    /** @var int $duration Duration of the video in seconds as defined by the sender */
    public int $duration { set; get; }

    /** @var PhotoSizeInterface|null $thumbnail Optional. Video thumbnail */
    public ?PhotoSizeInterface $thumbnail { set; get; }

    /** @var array<PhotoSizeInterface>|null $cover Optional. Available sizes of the cover of the video in the message */
    public ?array $cover { set; get; }

    /** @var int|null $startTimestamp Optional. Timestamp in seconds from which the video will play in the message */
    public ?int $startTimestamp { set; get; }

    /** @var array<VideoQualityInterface>|null $qualities Optional. List of available qualities of the video */
    public ?array $qualities { set; get; }

    /** @var string|null $fileName Optional. Original filename as defined by the sender */
    public ?string $fileName { set; get; }

    /** @var string|null $mimeType Optional. MIME type of the file as defined by the sender */
    public ?string $mimeType { set; get; }

    /** @var int|null $fileSize Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value. */
    public ?int $fileSize { set; get; }
}
