<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\StickerInterface;

/**
 * This object represents a gift that can be sent by the bot.
 */
class Gift implements Interfaces\GiftInterface
{
    /**
     * @param string             $id               Unique identifier of the gift
     * @param StickerInterface   $sticker          The sticker that represents the gift
     * @param int                $starCount        The number of Telegram Stars that must be paid to send the sticker
     * @param int|null           $upgradeStarCount Optional. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
     * @param int|null           $totalCount       Optional. The total number of the gifts of this type that can be sent; for limited gifts only
     * @param int|null           $remainingCount   Optional. The number of remaining gifts of this type that can be sent; for limited gifts only
     * @param ChatInterface|null $publisherChat    Optional. Information about the chat that published the gift
     */
    public function __construct(
        public string $id,
        public StickerInterface $sticker,
        public int $starCount,
        public ?int $upgradeStarCount = null,
        public ?int $totalCount = null,
        public ?int $remainingCount = null,
        public ?ChatInterface $publisherChat = null,
    ) {
    }
}
