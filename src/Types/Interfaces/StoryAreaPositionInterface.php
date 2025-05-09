<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes the position of a clickable area within a story.
 */
interface StoryAreaPositionInterface extends TypeInterface
{
    /** @var float $xPercentage The abscissa of the area's center, as a percentage of the media width */
    public float $xPercentage { set; get; }

    /** @var float $yPercentage The ordinate of the area's center, as a percentage of the media height */
    public float $yPercentage { set; get; }

    /** @var float $widthPercentage The width of the area's rectangle, as a percentage of the media width */
    public float $widthPercentage { set; get; }

    /** @var float $heightPercentage The height of the area's rectangle, as a percentage of the media height */
    public float $heightPercentage { set; get; }

    /** @var float $rotationAngle The clockwise rotation angle of the rectangle, in degrees; 0-360 */
    public float $rotationAngle { set; get; }

    /** @var float $cornerRadiusPercentage The radius of the rectangle corner rounding, as a percentage of the media width */
    public float $cornerRadiusPercentage { set; get; }
}
