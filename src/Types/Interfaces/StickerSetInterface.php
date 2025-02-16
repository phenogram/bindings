<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a sticker set.
 */
interface StickerSetInterface extends TypeInterface
{
    /** @var string $name Sticker set name */
    public string $name { set; }

    /** @var string $title Sticker set title */
    public string $title { set; }

    /** @var string $stickerType Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji” */
    public string $stickerType { set; }

    /** @var array<StickerInterface> $stickers List of all set stickers */
    public array $stickers { set; }

    /** @var PhotoSizeInterface|null $thumbnail Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format */
    public ?PhotoSizeInterface $thumbnail { set; }
}
