<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\GiftBackgroundInterface;
use Phenogram\Bindings\Types\Interfaces\StickerInterface;

/**
 * This object represents a gift that can be sent by the bot.
 */
class Gift implements Interfaces\GiftInterface
{
    /**
     * @param string                       $id                     Unique identifier of the gift
     * @param StickerInterface             $sticker                The sticker that represents the gift
     * @param int                          $starCount              The number of Telegram Stars that must be paid to send the sticker
     * @param int|null                     $upgradeStarCount       Optional. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
     * @param bool|null                    $isPremium              Optional. True, if the gift can only be purchased by Telegram Premium subscribers
     * @param bool|null                    $hasColors              Optional. True, if the gift can be used (after being upgraded) to customize a user's appearance
     * @param int|null                     $totalCount             Optional. The total number of gifts of this type that can be sent by all users; for limited gifts only
     * @param int|null                     $remainingCount         Optional. The number of remaining gifts of this type that can be sent by all users; for limited gifts only
     * @param int|null                     $personalTotalCount     Optional. The total number of gifts of this type that can be sent by the bot; for limited gifts only
     * @param int|null                     $personalRemainingCount Optional. The number of remaining gifts of this type that can be sent by the bot; for limited gifts only
     * @param GiftBackgroundInterface|null $background             Optional. Background of the gift
     * @param int|null                     $uniqueGiftVariantCount Optional. The total number of different unique gifts that can be obtained by upgrading the gift
     * @param ChatInterface|null           $publisherChat          Optional. Information about the chat that published the gift
     */
    public function __construct(
        public string $id,
        public StickerInterface $sticker,
        public int $starCount,
        public ?int $upgradeStarCount = null,
        public ?bool $isPremium = null,
        public ?bool $hasColors = null,
        public ?int $totalCount = null,
        public ?int $remainingCount = null,
        public ?int $personalTotalCount = null,
        public ?int $personalRemainingCount = null,
        public ?GiftBackgroundInterface $background = null,
        public ?int $uniqueGiftVariantCount = null,
        public ?ChatInterface $publisherChat = null,
    ) {
    }
}
