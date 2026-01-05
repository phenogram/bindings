<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a gift that can be sent by the bot.
 */
interface GiftInterface extends TypeInterface
{
    /** @var string $id Unique identifier of the gift */
    public string $id { set; get; }

    /** @var StickerInterface $sticker The sticker that represents the gift */
    public StickerInterface $sticker { set; get; }

    /** @var int $starCount The number of Telegram Stars that must be paid to send the sticker */
    public int $starCount { set; get; }

    /** @var int|null $upgradeStarCount Optional. The number of Telegram Stars that must be paid to upgrade the gift to a unique one */
    public ?int $upgradeStarCount { set; get; }

    /** @var bool|null $isPremium Optional. True, if the gift can only be purchased by Telegram Premium subscribers */
    public ?bool $isPremium { set; get; }

    /** @var bool|null $hasColors Optional. True, if the gift can be used (after being upgraded) to customize a user's appearance */
    public ?bool $hasColors { set; get; }

    /** @var int|null $totalCount Optional. The total number of gifts of this type that can be sent by all users; for limited gifts only */
    public ?int $totalCount { set; get; }

    /** @var int|null $remainingCount Optional. The number of remaining gifts of this type that can be sent by all users; for limited gifts only */
    public ?int $remainingCount { set; get; }

    /** @var int|null $personalTotalCount Optional. The total number of gifts of this type that can be sent by the bot; for limited gifts only */
    public ?int $personalTotalCount { set; get; }

    /** @var int|null $personalRemainingCount Optional. The number of remaining gifts of this type that can be sent by the bot; for limited gifts only */
    public ?int $personalRemainingCount { set; get; }

    /** @var GiftBackgroundInterface|null $background Optional. Background of the gift */
    public ?GiftBackgroundInterface $background { set; get; }

    /** @var int|null $uniqueGiftVariantCount Optional. The total number of different unique gifts that can be obtained by upgrading the gift */
    public ?int $uniqueGiftVariantCount { set; get; }

    /** @var ChatInterface|null $publisherChat Optional. Information about the chat that published the gift */
    public ?ChatInterface $publisherChat { set; get; }
}
