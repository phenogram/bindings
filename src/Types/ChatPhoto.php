<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents a chat photo.
 */
class ChatPhoto implements Interfaces\ChatPhotoInterface
{
    /**
     * @param string $smallFileId       File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
     * @param string $smallFileUniqueId Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param string $bigFileId         File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
     * @param string $bigFileUniqueId   Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     */
    public function __construct(
        public string $smallFileId,
        public string $smallFileUniqueId,
        public string $bigFileId,
        public string $bigFileUniqueId,
    ) {
    }
}
