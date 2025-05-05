<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BackgroundFillGradient;
use Phenogram\Bindings\Types\Interfaces\BackgroundFillGradientInterface;

class BackgroundFillGradientFactory extends AbstractFactory
{
    /**
     * Creates a new BackgroundFillGradient instance with default fake data.
     *
     * @param string|null $type          Optional. Type of the background fill, always “gradient”
     * @param int|null    $topColor      Optional. Top color of the gradient in the RGB24 format
     * @param int|null    $bottomColor   Optional. Bottom color of the gradient in the RGB24 format
     * @param int|null    $rotationAngle Optional. Clockwise rotation angle of the background fill in degrees; 0-359
     */
    public static function make(
        ?string $type = null,
        ?int $topColor = null,
        ?int $bottomColor = null,
        ?int $rotationAngle = null,
    ): BackgroundFillGradientInterface {
        return self::factory()->makeBackgroundFillGradient(
            type: $type ?? self::fake()->word(),
            topColor: $topColor ?? self::fake()->randomNumber(),
            bottomColor: $bottomColor ?? self::fake()->randomNumber(),
            rotationAngle: $rotationAngle ?? self::fake()->randomNumber(),
        );
    }
}
