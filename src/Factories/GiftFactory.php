<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Factories\StickerFactory as Sticker;
use Phenogram\Bindings\Types\Gift;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\GiftBackgroundInterface;
use Phenogram\Bindings\Types\Interfaces\GiftInterface;
use Phenogram\Bindings\Types\Interfaces\StickerInterface;

class GiftFactory extends AbstractFactory
{
    /**
     * Creates a new Gift instance with default fake data.
     *
     * @param string|null                  $id                     Optional. Unique identifier of the gift
     * @param StickerInterface|null        $sticker                Optional. The sticker that represents the gift
     * @param int|null                     $starCount              Optional. The number of Telegram Stars that must be paid to send the sticker
     * @param int|null                     $upgradeStarCount       Optional. Optional. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
     * @param bool|null                    $isPremium              Optional. Optional. True, if the gift can only be purchased by Telegram Premium subscribers
     * @param bool|null                    $hasColors              Optional. Optional. True, if the gift can be used (after being upgraded) to customize a user's appearance
     * @param int|null                     $totalCount             Optional. Optional. The total number of gifts of this type that can be sent by all users; for limited gifts only
     * @param int|null                     $remainingCount         Optional. Optional. The number of remaining gifts of this type that can be sent by all users; for limited gifts only
     * @param int|null                     $personalTotalCount     Optional. Optional. The total number of gifts of this type that can be sent by the bot; for limited gifts only
     * @param int|null                     $personalRemainingCount Optional. Optional. The number of remaining gifts of this type that can be sent by the bot; for limited gifts only
     * @param GiftBackgroundInterface|null $background             Optional. Optional. Background of the gift
     * @param int|null                     $uniqueGiftVariantCount Optional. Optional. The total number of different unique gifts that can be obtained by upgrading the gift
     * @param ChatInterface|null           $publisherChat          Optional. Optional. Information about the chat that published the gift
     */
    public static function make(
        ?string $id = null,
        ?StickerInterface $sticker = null,
        ?int $starCount = null,
        ?int $upgradeStarCount = null,
        ?bool $isPremium = null,
        ?bool $hasColors = null,
        ?int $totalCount = null,
        ?int $remainingCount = null,
        ?int $personalTotalCount = null,
        ?int $personalRemainingCount = null,
        ?GiftBackgroundInterface $background = null,
        ?int $uniqueGiftVariantCount = null,
        ?ChatInterface $publisherChat = null,
    ): GiftInterface {
        return self::factory()->makeGift(
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            sticker: $sticker ?? Sticker::make(),
            starCount: $starCount ?? self::fake()->randomNumber(),
            upgradeStarCount: $upgradeStarCount,
            isPremium: $isPremium,
            hasColors: $hasColors,
            totalCount: $totalCount,
            remainingCount: $remainingCount,
            personalTotalCount: $personalTotalCount,
            personalRemainingCount: $personalRemainingCount,
            background: $background,
            uniqueGiftVariantCount: $uniqueGiftVariantCount,
            publisherChat: $publisherChat,
        );
    }
}
