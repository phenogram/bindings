<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\StickerInterface;

/**
 * This object describes the symbol shown on the pattern of a unique gift.
 */
class UniqueGiftSymbol implements Interfaces\UniqueGiftSymbolInterface
{
    /**
     * @param string           $name           Name of the symbol
     * @param StickerInterface $sticker        The sticker that represents the unique gift
     * @param int              $rarityPerMille The number of unique gifts that receive this model for every 1000 gifts upgraded
     */
    public function __construct(
        public string $name,
        public StickerInterface $sticker,
        public int $rarityPerMille,
    ) {
    }
}
