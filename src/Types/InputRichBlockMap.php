<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\LocationInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

/**
 * A block with a map, corresponding to the custom HTML tag <tg-map>. The map's width and height must not exceed 10000 in total. The width and height ratio must be at most 20.
 */
class InputRichBlockMap extends InputRichBlock implements Interfaces\InputRichBlockMapInterface
{
    /**
     * @param string                         $type     Type of the block, always “map”
     * @param LocationInterface              $location Location of the center of the map
     * @param int                            $zoom     Map zoom level; 0-24
     * @param int                            $width    Map width; 0-10000
     * @param int                            $height   Map height; 0-10000
     * @param RichBlockCaptionInterface|null $caption  Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public LocationInterface $location,
        public int $zoom,
        public int $width,
        public int $height,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
