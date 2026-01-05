<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes a unique gift that was upgraded from a regular gift.
 */
interface UniqueGiftInterface extends TypeInterface
{
    /** @var string $giftId Identifier of the regular gift from which the gift was upgraded */
    public string $giftId { set; get; }

    /** @var string $baseName Human-readable name of the regular gift from which this unique gift was upgraded */
    public string $baseName { set; get; }

    /** @var string $name Unique name of the gift. This name can be used in https://t.me/nft/... links and story areas */
    public string $name { set; get; }

    /** @var int $number Unique number of the upgraded gift among gifts upgraded from the same regular gift */
    public int $number { set; get; }

    /** @var UniqueGiftModelInterface $model Model of the gift */
    public UniqueGiftModelInterface $model { set; get; }

    /** @var UniqueGiftSymbolInterface $symbol Symbol of the gift */
    public UniqueGiftSymbolInterface $symbol { set; get; }

    /** @var UniqueGiftBackdropInterface $backdrop Backdrop of the gift */
    public UniqueGiftBackdropInterface $backdrop { set; get; }

    /** @var bool|null $isPremium Optional. True, if the original regular gift was exclusively purchaseable by Telegram Premium subscribers */
    public ?bool $isPremium { set; get; }

    /** @var bool|null $isFromBlockchain Optional. True, if the gift is assigned from the TON blockchain and can't be resold or transferred in Telegram */
    public ?bool $isFromBlockchain { set; get; }

    /** @var UniqueGiftColorsInterface|null $colors Optional. The color scheme that can be used by the gift's owner for the chat's name, replies to messages and link previews; for business account gifts and gifts that are currently on sale only */
    public ?UniqueGiftColorsInterface $colors { set; get; }

    /** @var ChatInterface|null $publisherChat Optional. Information about the chat that published the gift */
    public ?ChatInterface $publisherChat { set; get; }
}
