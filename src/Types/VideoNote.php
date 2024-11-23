<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\PhotoSizeInterface;

/**
 * This object represents a video message (available in Telegram apps as of v.4.0).
 */
class VideoNote implements Interfaces\VideoNoteInterface
{
    /**
     * @param string                  $fileId       Identifier for this file, which can be used to download or reuse the file
     * @param string                  $fileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int                     $length       Video width and height (diameter of the video message) as defined by the sender
     * @param int                     $duration     Duration of the video in seconds as defined by the sender
     * @param PhotoSizeInterface|null $thumbnail    Optional. Video thumbnail
     * @param int|null                $fileSize     Optional. File size in bytes
     */
    public function __construct(
        public string $fileId,
        public string $fileUniqueId,
        public int $length,
        public int $duration,
        public ?PhotoSizeInterface $thumbnail = null,
        public ?int $fileSize = null,
    ) {
    }
}
