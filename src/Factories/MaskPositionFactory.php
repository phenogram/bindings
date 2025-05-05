<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\MaskPositionInterface;
use Phenogram\Bindings\Types\MaskPosition;

class MaskPositionFactory extends AbstractFactory
{
    /**
     * Creates a new MaskPosition instance with default fake data.
     *
     * @param string|null $point  Optional. The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
     * @param float|null  $xShift Optional. Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
     * @param float|null  $yShift Optional. Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
     * @param float|null  $scale  Optional. Mask scaling coefficient. For example, 2.0 means double size.
     */
    public static function make(
        ?string $point = null,
        ?float $xShift = null,
        ?float $yShift = null,
        ?float $scale = null,
    ): MaskPositionInterface {
        return self::factory()->makeMaskPosition(
            point: $point ?? self::fake()->text(50),
            xShift: $xShift ?? self::fake()->randomFloat(),
            yShift: $yShift ?? self::fake()->randomFloat(),
            scale: $scale ?? self::fake()->randomFloat(),
        );
    }
}
