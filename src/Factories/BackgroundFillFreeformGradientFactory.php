<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BackgroundFillFreeformGradient;
use Phenogram\Bindings\Types\Interfaces\BackgroundFillFreeformGradientInterface;

class BackgroundFillFreeformGradientFactory extends AbstractFactory
{
    /**
     * Creates a new BackgroundFillFreeformGradient instance with default fake data.
     *
     * @param string|null $type   Optional. Type of the background fill, always “freeform_gradient”
     * @param array|null  $colors Optional. A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format
     */
    public static function make(?string $type = null, ?array $colors = null): BackgroundFillFreeformGradientInterface
    {
        return self::factory()->makeBackgroundFillFreeformGradient(
            type: $type ?? self::fake()->word(),
            colors: $colors ?? self::fake()->randomElements(range(1, 100), self::fake()->numberBetween(1, 5)),
        );
    }
}
