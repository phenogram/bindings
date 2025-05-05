<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BackgroundFillSolid;
use Phenogram\Bindings\Types\Interfaces\BackgroundFillSolidInterface;

class BackgroundFillSolidFactory extends AbstractFactory
{
    /**
     * Creates a new BackgroundFillSolid instance with default fake data.
     *
     * @param string|null $type  Optional. Type of the background fill, always “solid”
     * @param int|null    $color Optional. The color of the background fill in the RGB24 format
     */
    public static function make(?string $type = null, ?int $color = null): BackgroundFillSolidInterface
    {
        return self::factory()->makeBackgroundFillSolid(
            type: $type ?? self::fake()->word(),
            color: $color ?? self::fake()->randomNumber(),
        );
    }
}
