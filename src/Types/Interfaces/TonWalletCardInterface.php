<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes a TON wallet card, which is shown on the profile page of a user to everyone.
 */
interface TonWalletCardInterface extends TypeInterface
{
    /** @var string $address Address of the wallet */
    public string $address { set; get; }

    /** @var string $amount Balance of the wallet, in the smallest units of the cryptocurrency, as a decimal number */
    public string $amount { set; get; }

    /** @var array<TonWalletCardStickerInterface> $stickers Stickers placed on the card */
    public array $stickers { set; get; }

    /** @var string|null $backgroundNftAddress Optional. Address of the NFT of one of the stickers, whose colors must be used for the card background; omitted if the default background must be used */
    public ?string $backgroundNftAddress { set; get; }
}
