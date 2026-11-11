<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UniqueGiftFactory as UniqueGift;
use Phenogram\Bindings\Types\ChatShareThemeUniqueGift;
use Phenogram\Bindings\Types\Interfaces\ChatShareThemeUniqueGiftInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftInterface;

class ChatShareThemeUniqueGiftFactory extends AbstractFactory
{
    /**
     * Creates a new ChatShareThemeUniqueGift instance with default fake data.
     *
     * @param string|null              $type Optional. Type of the theme, always “unique_gift”
     * @param UniqueGiftInterface|null $gift Optional. The gift
     */
    public static function make(
        ?string $type = null,
        ?UniqueGiftInterface $gift = null,
    ): ChatShareThemeUniqueGiftInterface {
        return self::factory()->makeChatShareThemeUniqueGift(
            type: $type ?? 'unique_gift',
            gift: $gift ?? UniqueGift::make(),
        );
    }
}
