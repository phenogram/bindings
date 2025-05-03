<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The background is filled using the selected color.
 */
interface BackgroundFillSolidInterface extends TypeInterface
{
    /** @var string $type Type of the background fill, always “solid” */
    public string $type { set; get; }

    /** @var int $color The color of the background fill in the RGB24 format */
    public int $color { set; get; }
}
