<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\TonWalletCardStickerFactory as TonWalletCardSticker;
use Phenogram\Bindings\Types\Interfaces\TonWalletCardInterface;
use Phenogram\Bindings\Types\TonWalletCard;

class TonWalletCardFactory extends AbstractFactory
{
    /**
     * Creates a new TonWalletCard instance with default fake data.
     *
     * @param string|null $address              Optional. Address of the wallet
     * @param string|null $amount               Optional. Balance of the wallet, in the smallest units of the cryptocurrency, as a decimal number
     * @param array|null  $stickers             Optional. Stickers placed on the card
     * @param string|null $backgroundNftAddress Optional. Optional. Address of the NFT of one of the stickers, whose colors must be used for the card background; omitted if the default background must be used
     */
    public static function make(
        ?string $address = null,
        ?string $amount = null,
        ?array $stickers = null,
        ?string $backgroundNftAddress = null,
    ): TonWalletCardInterface {
        return self::factory()->makeTonWalletCard(
            address: $address ?? self::fake()->text(50),
            amount: $amount ?? self::fake()->text(50),
            stickers: $stickers ?? array_map(fn () => TonWalletCardSticker::make(), range(0, self::fake()->numberBetween(0, 2))),
            backgroundNftAddress: $backgroundNftAddress,
        );
    }
}
