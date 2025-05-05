<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PhotoSizeInterface;
use Phenogram\Bindings\Types\Interfaces\VideoNoteInterface;
use Phenogram\Bindings\Types\VideoNote;

class VideoNoteFactory extends AbstractFactory
{
    /**
     * Creates a new VideoNote instance with default fake data.
     *
     * @param string|null             $fileId       Optional. Identifier for this file, which can be used to download or reuse the file
     * @param string|null             $fileUniqueId Optional. Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int|null                $length       Optional. Video width and height (diameter of the video message) as defined by the sender
     * @param int|null                $duration     Optional. Duration of the video in seconds as defined by the sender
     * @param PhotoSizeInterface|null $thumbnail    Optional. Optional. Video thumbnail
     * @param int|null                $fileSize     Optional. Optional. File size in bytes
     */
    public static function make(
        ?string $fileId = null,
        ?string $fileUniqueId = null,
        ?int $length = null,
        ?int $duration = null,
        ?PhotoSizeInterface $thumbnail = null,
        ?int $fileSize = null,
    ): VideoNoteInterface {
        return self::factory()->makeVideoNote(
            fileId: $fileId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            fileUniqueId: $fileUniqueId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            length: $length ?? self::fake()->numberBetween(0, 100),
            duration: $duration ?? self::fake()->numberBetween(10, 1000),
            thumbnail: $thumbnail,
            fileSize: $fileSize,
        );
    }
}
