<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatShareThemeBackdropFactory as ChatShareThemeBackdrop;
use Phenogram\Bindings\Types\ChatShareThemeBackdrops;
use Phenogram\Bindings\Types\Interfaces\ChatShareThemeBackdropsInterface;

class ChatShareThemeBackdropsFactory extends AbstractFactory
{
    /**
     * Creates a new ChatShareThemeBackdrops instance with default fake data.
     *
     * @param array|null $backdrops Optional. The list of backdrops
     */
    public static function make(?array $backdrops = null): ChatShareThemeBackdropsInterface
    {
        return self::factory()->makeChatShareThemeBackdrops(
            backdrops: $backdrops ?? array_map(fn () => ChatShareThemeBackdrop::make(), range(0, self::fake()->numberBetween(0, 2))),
        );
    }
}
