<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes a sticker on a TON wallet card.
 */
interface TonWalletCardStickerInterface extends TypeInterface
{
    /** @var AreaPositionInterface $position Position of the sticker on the card */
    public AreaPositionInterface $position { set; get; }

    /** @var TonNftInterface $nft The NFT shown as the sticker */
    public TonNftInterface $nft { set; get; }
}
