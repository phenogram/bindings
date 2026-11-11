<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\AreaPositionFactory as AreaPosition;
use Phenogram\Bindings\Factories\TonNftFactory as TonNft;
use Phenogram\Bindings\Types\Interfaces\AreaPositionInterface;
use Phenogram\Bindings\Types\Interfaces\TonNftInterface;
use Phenogram\Bindings\Types\Interfaces\TonWalletCardStickerInterface;
use Phenogram\Bindings\Types\TonWalletCardSticker;

class TonWalletCardStickerFactory extends AbstractFactory
{
    /**
     * Creates a new TonWalletCardSticker instance with default fake data.
     *
     * @param AreaPositionInterface|null $position Optional. Position of the sticker on the card
     * @param TonNftInterface|null       $nft      Optional. The NFT shown as the sticker
     */
    public static function make(
        ?AreaPositionInterface $position = null,
        ?TonNftInterface $nft = null,
    ): TonWalletCardStickerInterface {
        return self::factory()->makeTonWalletCardSticker(
            position: $position ?? AreaPosition::make(),
            nft: $nft ?? TonNft::make(),
        );
    }
}
