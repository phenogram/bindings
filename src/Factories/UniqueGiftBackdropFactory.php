<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UniqueGiftBackdropColorsFactory as UniqueGiftBackdropColors;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftBackdropColorsInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftBackdropInterface;
use Phenogram\Bindings\Types\UniqueGiftBackdrop;

class UniqueGiftBackdropFactory extends AbstractFactory
{
    /**
     * Creates a new UniqueGiftBackdrop instance with default fake data.
     *
     * @param string|null                            $name           Optional. Name of the backdrop
     * @param UniqueGiftBackdropColorsInterface|null $colors         Optional. Colors of the backdrop
     * @param int|null                               $rarityPerMille Optional. The number of unique gifts that receive this backdrop for every 1000 gifts upgraded
     */
    public static function make(
        ?string $name = null,
        ?UniqueGiftBackdropColorsInterface $colors = null,
        ?int $rarityPerMille = null,
    ): UniqueGiftBackdropInterface {
        return self::factory()->makeUniqueGiftBackdrop(
            name: $name ?? self::fake()->text(50),
            colors: $colors ?? UniqueGiftBackdropColors::make(),
            rarityPerMille: $rarityPerMille ?? self::fake()->randomNumber(),
        );
    }
}
