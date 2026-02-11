<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PhotoSizeInterface;
use Phenogram\Bindings\Types\Interfaces\VideoInterface;
use Phenogram\Bindings\Types\Video;

class VideoFactory extends AbstractFactory
{
    /**
     * Creates a new Video instance with default fake data.
     *
     * @param string|null             $fileId         Optional. Identifier for this file, which can be used to download or reuse the file
     * @param string|null             $fileUniqueId   Optional. Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int|null                $width          Optional. Video width as defined by the sender
     * @param int|null                $height         Optional. Video height as defined by the sender
     * @param int|null                $duration       Optional. Duration of the video in seconds as defined by the sender
     * @param PhotoSizeInterface|null $thumbnail      Optional. Optional. Video thumbnail
     * @param array|null              $cover          Optional. Optional. Available sizes of the cover of the video in the message
     * @param int|null                $startTimestamp Optional. Optional. Timestamp in seconds from which the video will play in the message
     * @param array|null              $qualities      Optional. Optional. List of available qualities of the video
     * @param string|null             $fileName       Optional. Optional. Original filename as defined by the sender
     * @param string|null             $mimeType       Optional. Optional. MIME type of the file as defined by the sender
     * @param int|null                $fileSize       Optional. Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     */
    public static function make(
        ?string $fileId = null,
        ?string $fileUniqueId = null,
        ?int $width = null,
        ?int $height = null,
        ?int $duration = null,
        ?PhotoSizeInterface $thumbnail = null,
        ?array $cover = null,
        ?int $startTimestamp = null,
        ?array $qualities = null,
        ?string $fileName = null,
        ?string $mimeType = null,
        ?int $fileSize = null,
    ): VideoInterface {
        return self::factory()->makeVideo(
            fileId: $fileId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            fileUniqueId: $fileUniqueId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            width: $width ?? self::fake()->numberBetween(10, 1000),
            height: $height ?? self::fake()->numberBetween(10, 1000),
            duration: $duration ?? self::fake()->numberBetween(10, 1000),
            thumbnail: $thumbnail,
            cover: $cover,
            startTimestamp: $startTimestamp,
            qualities: $qualities,
            fileName: $fileName,
            mimeType: $mimeType,
            fileSize: $fileSize,
        );
    }
}
