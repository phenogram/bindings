<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftBackdropInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftColorsInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftModelInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftSymbolInterface;

/**
 * This object describes a unique gift that was upgraded from a regular gift.
 */
class UniqueGift implements Interfaces\UniqueGiftInterface
{
    /**
     * @param string                         $giftId           Identifier of the regular gift from which the gift was upgraded
     * @param string                         $baseName         Human-readable name of the regular gift from which this unique gift was upgraded
     * @param string                         $name             Unique name of the gift. This name can be used in https://t.me/nft/... links and story areas
     * @param int                            $number           Unique number of the upgraded gift among gifts upgraded from the same regular gift
     * @param UniqueGiftModelInterface       $model            Model of the gift
     * @param UniqueGiftSymbolInterface      $symbol           Symbol of the gift
     * @param UniqueGiftBackdropInterface    $backdrop         Backdrop of the gift
     * @param bool|null                      $isPremium        Optional. True, if the original regular gift was exclusively purchaseable by Telegram Premium subscribers
     * @param bool|null                      $isBurned         Optional. True, if the gift was used to craft another gift and isn't available anymore
     * @param bool|null                      $isFromBlockchain Optional. True, if the gift is assigned from the TON blockchain and can't be resold or transferred in Telegram
     * @param UniqueGiftColorsInterface|null $colors           Optional. The color scheme that can be used by the gift's owner for the chat's name, replies to messages and link previews; for business account gifts and gifts that are currently on sale only
     * @param ChatInterface|null             $publisherChat    Optional. Information about the chat that published the gift
     */
    public function __construct(
        public string $giftId,
        public string $baseName,
        public string $name,
        public int $number,
        public UniqueGiftModelInterface $model,
        public UniqueGiftSymbolInterface $symbol,
        public UniqueGiftBackdropInterface $backdrop,
        public ?bool $isPremium = null,
        public ?bool $isBurned = null,
        public ?bool $isFromBlockchain = null,
        public ?UniqueGiftColorsInterface $colors = null,
        public ?ChatInterface $publisherChat = null,
    ) {
    }
}
