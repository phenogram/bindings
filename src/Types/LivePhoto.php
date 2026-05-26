<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\PhotoSizeInterface;

/**
 * This object represents a live photo.
 */
class LivePhoto implements Interfaces\LivePhotoInterface
{
    /**
     * @param string                         $fileId       Identifier for the video file which can be used to download or reuse the file
     * @param string                         $fileUniqueId Unique identifier for the video file which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int                            $width        Video width as defined by the sender
     * @param int                            $height       Video height as defined by the sender
     * @param int                            $duration     Duration of the video in seconds as defined by the sender
     * @param array<PhotoSizeInterface>|null $photo        Optional. Available sizes of the corresponding static photo
     * @param string|null                    $mimeType     Optional. MIME type of the file as defined by the sender
     * @param int|null                       $fileSize     Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     */
    public function __construct(
        public string $fileId,
        public string $fileUniqueId,
        public int $width,
        public int $height,
        public int $duration,
        public ?array $photo = null,
        public ?string $mimeType = null,
        public ?int $fileSize = null,
    ) {
    }
}
