<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\StickerFactory as Sticker;
use Phenogram\Bindings\Types\Gift;
use Phenogram\Bindings\Types\Interfaces\GiftInterface;
use Phenogram\Bindings\Types\Interfaces\StickerInterface;

class GiftFactory extends AbstractFactory
{
    /**
     * Creates a new Gift instance with default fake data.
     *
     * @param string|null           $id               Optional. Unique identifier of the gift
     * @param StickerInterface|null $sticker          Optional. The sticker that represents the gift
     * @param int|null              $starCount        Optional. The number of Telegram Stars that must be paid to send the sticker
     * @param int|null              $upgradeStarCount Optional. Optional. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
     * @param int|null              $totalCount       Optional. Optional. The total number of the gifts of this type that can be sent; for limited gifts only
     * @param int|null              $remainingCount   Optional. Optional. The number of remaining gifts of this type that can be sent; for limited gifts only
     */
    public static function make(
        ?string $id = null,
        ?StickerInterface $sticker = null,
        ?int $starCount = null,
        ?int $upgradeStarCount = null,
        ?int $totalCount = null,
        ?int $remainingCount = null,
    ): GiftInterface {
        return self::factory()->makeGift(
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            sticker: $sticker ?? Sticker::make(),
            starCount: $starCount ?? self::fake()->randomNumber(),
            upgradeStarCount: $upgradeStarCount,
            totalCount: $totalCount,
            remainingCount: $remainingCount,
        );
    }
}
