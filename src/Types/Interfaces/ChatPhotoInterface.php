<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a chat photo.
 */
interface ChatPhotoInterface extends TypeInterface
{
    /** @var string $smallFileId File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed. */
    public string $smallFileId { set; get; }

    /** @var string $smallFileUniqueId Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $smallFileUniqueId { set; get; }

    /** @var string $bigFileId File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed. */
    public string $bigFileId { set; get; }

    /** @var string $bigFileUniqueId Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $bigFileUniqueId { set; get; }
}
