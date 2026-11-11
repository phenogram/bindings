<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\TonWalletCardStickerInterface;

/**
 * This object describes a TON wallet card, which is shown on the profile page of a user to everyone.
 */
class TonWalletCard implements Interfaces\TonWalletCardInterface
{
    /**
     * @param string                               $address              Address of the wallet
     * @param string                               $amount               Balance of the wallet, in the smallest units of the cryptocurrency, as a decimal number
     * @param array<TonWalletCardStickerInterface> $stickers             Stickers placed on the card
     * @param string|null                          $backgroundNftAddress Optional. Address of the NFT of one of the stickers, whose colors must be used for the card background; omitted if the default background must be used
     */
    public function __construct(
        public string $address,
        public string $amount,
        public array $stickers,
        public ?string $backgroundNftAddress = null,
    ) {
    }
}
