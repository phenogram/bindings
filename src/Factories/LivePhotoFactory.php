<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\LivePhotoInterface;
use Phenogram\Bindings\Types\LivePhoto;

class LivePhotoFactory extends AbstractFactory
{
    /**
     * Creates a new LivePhoto instance with default fake data.
     *
     * @param array|null  $photo        Optional. Optional. Available sizes of the corresponding static photo
     * @param string|null $fileId       Optional. Identifier for the video file which can be used to download or reuse the file
     * @param string|null $fileUniqueId Optional. Unique identifier for the video file which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int|null    $width        Optional. Video width as defined by the sender
     * @param int|null    $height       Optional. Video height as defined by the sender
     * @param int|null    $duration     Optional. Duration of the video in seconds as defined by the sender
     * @param string|null $mimeType     Optional. Optional. MIME type of the file as defined by the sender
     * @param int|null    $fileSize     Optional. Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     */
    public static function make(
        ?array $photo = null,
        ?string $fileId = null,
        ?string $fileUniqueId = null,
        ?int $width = null,
        ?int $height = null,
        ?int $duration = null,
        ?string $mimeType = null,
        ?int $fileSize = null,
    ): LivePhotoInterface {
        return self::factory()->makeLivePhoto(
            photo: $photo,
            fileId: $fileId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            fileUniqueId: $fileUniqueId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            width: $width ?? self::fake()->numberBetween(10, 1000),
            height: $height ?? self::fake()->numberBetween(10, 1000),
            duration: $duration ?? self::fake()->numberBetween(10, 1000),
            mimeType: $mimeType,
            fileSize: $fileSize,
        );
    }
}
