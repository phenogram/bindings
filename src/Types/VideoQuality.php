<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents a video file of a specific quality.
 */
class VideoQuality implements Interfaces\VideoQualityInterface
{
    /**
     * @param string   $fileId       Identifier for this file, which can be used to download or reuse the file
     * @param string   $fileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int      $width        Video width
     * @param int      $height       Video height
     * @param string   $codec        Codec that was used to encode the video, for example, “h264”, “h265”, or “av01”
     * @param int|null $fileSize     Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     */
    public function __construct(
        public string $fileId,
        public string $fileUniqueId,
        public int $width,
        public int $height,
        public string $codec,
        public ?int $fileSize = null,
    ) {
    }
}
