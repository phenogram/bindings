<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a gift that can be sent by the bot.
 */
interface GiftInterface extends TypeInterface
{
    /** @var string $id Unique identifier of the gift */
    public string $id { set; }

    /** @var StickerInterface $sticker The sticker that represents the gift */
    public StickerInterface $sticker { set; }

    /** @var int $starCount The number of Telegram Stars that must be paid to send the sticker */
    public int $starCount { set; }

    /** @var int|null $upgradeStarCount Optional. The number of Telegram Stars that must be paid to upgrade the gift to a unique one */
    public ?int $upgradeStarCount { set; }

    /** @var int|null $totalCount Optional. The total number of the gifts of this type that can be sent; for limited gifts only */
    public ?int $totalCount { set; }

    /** @var int|null $remainingCount Optional. The number of remaining gifts of this type that can be sent; for limited gifts only */
    public ?int $remainingCount { set; }
}
