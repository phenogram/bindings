<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UniqueGiftBackdropColorsFactory as UniqueGiftBackdropColors;
use Phenogram\Bindings\Types\ChatShareThemeBackdrop;
use Phenogram\Bindings\Types\Interfaces\ChatShareThemeBackdropInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftBackdropColorsInterface;

class ChatShareThemeBackdropFactory extends AbstractFactory
{
    /**
     * Creates a new ChatShareThemeBackdrop instance with default fake data.
     *
     * @param int|null                               $id     Optional. Unique identifier of the backdrop
     * @param string|null                            $name   Optional. Name of the backdrop
     * @param UniqueGiftBackdropColorsInterface|null $colors Optional. Colors of the backdrop
     */
    public static function make(
        ?int $id = null,
        ?string $name = null,
        ?UniqueGiftBackdropColorsInterface $colors = null,
    ): ChatShareThemeBackdropInterface {
        return self::factory()->makeChatShareThemeBackdrop(
            id: $id ?? self::fake()->numberBetween(100000, 999999999),
            name: $name ?? self::fake()->text(50),
            colors: $colors ?? UniqueGiftBackdropColors::make(),
        );
    }
}
