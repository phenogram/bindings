<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a video file of a specific quality.
 */
interface VideoQualityInterface extends TypeInterface
{
    /** @var string $fileId Identifier for this file, which can be used to download or reuse the file */
    public string $fileId { set; get; }

    /** @var string $fileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $fileUniqueId { set; get; }

    /** @var int $width Video width */
    public int $width { set; get; }

    /** @var int $height Video height */
    public int $height { set; get; }

    /** @var string $codec Codec that was used to encode the video, for example, “h264”, “h265”, or “av01” */
    public string $codec { set; get; }

    /** @var int|null $fileSize Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value. */
    public ?int $fileSize { set; get; }
}
