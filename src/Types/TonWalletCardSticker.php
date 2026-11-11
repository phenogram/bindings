<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\AreaPositionInterface;
use Phenogram\Bindings\Types\Interfaces\TonNftInterface;

/**
 * This object describes a sticker on a TON wallet card.
 */
class TonWalletCardSticker implements Interfaces\TonWalletCardStickerInterface
{
    /**
     * @param AreaPositionInterface $position Position of the sticker on the card
     * @param TonNftInterface       $nft      The NFT shown as the sticker
     */
    public function __construct(
        public AreaPositionInterface $position,
        public TonNftInterface $nft,
    ) {
    }
}
