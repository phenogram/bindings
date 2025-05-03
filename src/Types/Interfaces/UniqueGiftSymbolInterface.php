<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes the symbol shown on the pattern of a unique gift.
 */
interface UniqueGiftSymbolInterface extends TypeInterface
{
    /** @var string $name Name of the symbol */
    public string $name { set; get; }

    /** @var StickerInterface $sticker The sticker that represents the unique gift */
    public StickerInterface $sticker { set; get; }

    /** @var int $rarityPerMille The number of unique gifts that receive this model for every 1000 gifts upgraded */
    public int $rarityPerMille { set; get; }
}
