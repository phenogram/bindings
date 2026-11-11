<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\AreaPosition;
use Phenogram\Bindings\Types\Interfaces\AreaPositionInterface;

class AreaPositionFactory extends AbstractFactory
{
    /**
     * Creates a new AreaPosition instance with default fake data.
     *
     * @param float|null $xPercentage            Optional. The abscissa of the area's center, as a percentage of the media or the card width
     * @param float|null $yPercentage            Optional. The ordinate of the area's center, as a percentage of the media or the card height
     * @param float|null $widthPercentage        Optional. The width of the area's rectangle, as a percentage of the media or the card width
     * @param float|null $heightPercentage       Optional. The height of the area's rectangle, as a percentage of the media or the card height
     * @param float|null $rotationAngle          Optional. The clockwise rotation angle of the rectangle, in degrees; 0-360
     * @param float|null $cornerRadiusPercentage Optional. The radius of the rectangle corner rounding, as a percentage of the media or the card width
     */
    public static function make(
        ?float $xPercentage = null,
        ?float $yPercentage = null,
        ?float $widthPercentage = null,
        ?float $heightPercentage = null,
        ?float $rotationAngle = null,
        ?float $cornerRadiusPercentage = null,
    ): AreaPositionInterface {
        return self::factory()->makeAreaPosition(
            xPercentage: $xPercentage ?? self::fake()->randomFloat(),
            yPercentage: $yPercentage ?? self::fake()->randomFloat(),
            widthPercentage: $widthPercentage ?? self::fake()->randomFloat(),
            heightPercentage: $heightPercentage ?? self::fake()->randomFloat(),
            rotationAngle: $rotationAngle ?? self::fake()->randomFloat(),
            cornerRadiusPercentage: $cornerRadiusPercentage ?? self::fake()->randomFloat(),
        );
    }
}
