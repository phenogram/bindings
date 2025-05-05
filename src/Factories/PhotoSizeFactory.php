<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PhotoSizeInterface;
use Phenogram\Bindings\Types\PhotoSize;

class PhotoSizeFactory extends AbstractFactory
{
    /**
     * Creates a new PhotoSize instance with default fake data.
     *
     * @param string|null $fileId       Optional. Identifier for this file, which can be used to download or reuse the file
     * @param string|null $fileUniqueId Optional. Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int|null    $width        Optional. Photo width
     * @param int|null    $height       Optional. Photo height
     * @param int|null    $fileSize     Optional. Optional. File size in bytes
     */
    public static function make(
        ?string $fileId = null,
        ?string $fileUniqueId = null,
        ?int $width = null,
        ?int $height = null,
        ?int $fileSize = null,
    ): PhotoSizeInterface {
        return self::factory()->makePhotoSize(
            fileId: $fileId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            fileUniqueId: $fileUniqueId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            width: $width ?? self::fake()->numberBetween(10, 1000),
            height: $height ?? self::fake()->numberBetween(10, 1000),
            fileSize: $fileSize,
        );
    }
}
