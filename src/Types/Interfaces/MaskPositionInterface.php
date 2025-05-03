<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes the position on faces where a mask should be placed by default.
 */
interface MaskPositionInterface extends TypeInterface
{
    /** @var string $point The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”. */
    public string $point { set; get; }

    /** @var float $xShift Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position. */
    public float $xShift { set; get; }

    /** @var float $yShift Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position. */
    public float $yShift { set; get; }

    /** @var float $scale Mask scaling coefficient. For example, 2.0 means double size. */
    public float $scale { set; get; }
}
