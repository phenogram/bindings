<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\StickerInterface;

/**
 * This object describes the model of a unique gift.
 */
class UniqueGiftModel implements Interfaces\UniqueGiftModelInterface
{
    /**
     * @param string           $name           Name of the model
     * @param StickerInterface $sticker        The sticker that represents the unique gift
     * @param int              $rarityPerMille The number of unique gifts that receive this model for every 1000 gift upgrades. Always 0 for crafted gifts.
     * @param string|null      $rarity         Optional. Rarity of the model if it is a crafted model. Currently, can be “uncommon”, “rare”, “epic”, or “legendary”.
     */
    public function __construct(
        public string $name,
        public StickerInterface $sticker,
        public int $rarityPerMille,
        public ?string $rarity = null,
    ) {
    }
}
