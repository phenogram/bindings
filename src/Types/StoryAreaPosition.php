<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes the position of a clickable area within a story.
 */
class StoryAreaPosition implements Interfaces\StoryAreaPositionInterface
{
    /**
     * @param float $xPercentage            The abscissa of the area's center, as a percentage of the media width
     * @param float $yPercentage            The ordinate of the area's center, as a percentage of the media height
     * @param float $widthPercentage        The width of the area's rectangle, as a percentage of the media width
     * @param float $heightPercentage       The height of the area's rectangle, as a percentage of the media height
     * @param float $rotationAngle          The clockwise rotation angle of the rectangle, in degrees; 0-360
     * @param float $cornerRadiusPercentage The radius of the rectangle corner rounding, as a percentage of the media width
     */
    public function __construct(
        public float $xPercentage,
        public float $yPercentage,
        public float $widthPercentage,
        public float $heightPercentage,
        public float $rotationAngle,
        public float $cornerRadiusPercentage,
    ) {
    }
}
