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

    /** @var int|null $totalCount Optional. The total number of the gifts of this type that can be sent; for limited gifts only */
    public ?int $totalCount { set; get; }

    /** @var int|null $remainingCount Optional. The number of remaining gifts of this type that can be sent; for limited gifts only */
    public ?int $remainingCount { set; get; }
}
