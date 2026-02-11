<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\VideoQualityInterface;
use Phenogram\Bindings\Types\VideoQuality;

class VideoQualityFactory extends AbstractFactory
{
    /**
     * Creates a new VideoQuality instance with default fake data.
     *
     * @param string|null $fileId       Optional. Identifier for this file, which can be used to download or reuse the file
     * @param string|null $fileUniqueId Optional. Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int|null    $width        Optional. Video width
     * @param int|null    $height       Optional. Video height
     * @param string|null $codec        Optional. Codec that was used to encode the video, for example, “h264”, “h265”, or “av01”
     * @param int|null    $fileSize     Optional. Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     */
    public static function make(
        ?string $fileId = null,
        ?string $fileUniqueId = null,
        ?int $width = null,
        ?int $height = null,
        ?string $codec = null,
        ?int $fileSize = null,
    ): VideoQualityInterface {
        return self::factory()->makeVideoQuality(
            fileId: $fileId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            fileUniqueId: $fileUniqueId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            width: $width ?? self::fake()->numberBetween(10, 1000),
            height: $height ?? self::fake()->numberBetween(10, 1000),
            codec: $codec ?? self::fake()->text(50),
            fileSize: $fileSize,
        );
    }
}
