<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\UniqueGiftBackdropColorsInterface;
use Phenogram\Bindings\Types\UniqueGiftBackdropColors;

class UniqueGiftBackdropColorsFactory extends AbstractFactory
{
    /**
     * Creates a new UniqueGiftBackdropColors instance with default fake data.
     *
     * @param int|null $centerColor Optional. The color in the center of the backdrop in RGB format
     * @param int|null $edgeColor   Optional. The color on the edges of the backdrop in RGB format
     * @param int|null $symbolColor Optional. The color to be applied to the symbol in RGB format
     * @param int|null $textColor   Optional. The color for the text on the backdrop in RGB format
     */
    public static function make(
        ?int $centerColor = null,
        ?int $edgeColor = null,
        ?int $symbolColor = null,
        ?int $textColor = null,
    ): UniqueGiftBackdropColorsInterface {
        return self::factory()->makeUniqueGiftBackdropColors(
            centerColor: $centerColor ?? self::fake()->randomNumber(),
            edgeColor: $edgeColor ?? self::fake()->randomNumber(),
            symbolColor: $symbolColor ?? self::fake()->randomNumber(),
            textColor: $textColor ?? self::fake()->randomNumber(),
        );
    }
}
