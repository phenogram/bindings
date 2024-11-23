<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\PhotoSizeInterface;
use Phenogram\Bindings\Types\Interfaces\StickerInterface;

/**
 * This object represents a sticker set.
 */
class StickerSet implements Interfaces\StickerSetInterface
{
    /**
     * @param string                  $name        Sticker set name
     * @param string                  $title       Sticker set title
     * @param string                  $stickerType Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
     * @param array<StickerInterface> $stickers    List of all set stickers
     * @param PhotoSizeInterface|null $thumbnail   Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
     */
    public function __construct(
        public string $name,
        public string $title,
        public string $stickerType,
        public array $stickers,
        public ?PhotoSizeInterface $thumbnail = null,
    ) {
    }
}
