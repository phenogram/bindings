<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents one size of a photo or a file / sticker thumbnail.
 */
interface PhotoSizeInterface extends TypeInterface
{
    /** @var string $fileId Identifier for this file, which can be used to download or reuse the file */
    public string $fileId { set; }

    /** @var string $fileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $fileUniqueId { set; }

    /** @var int $width Photo width */
    public int $width { set; }

    /** @var int $height Photo height */
    public int $height { set; }

    /** @var int|null $fileSize Optional. File size in bytes */
    public ?int $fileSize { set; }
}
