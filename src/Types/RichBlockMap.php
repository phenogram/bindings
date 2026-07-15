<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\LocationInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

/**
 * A block with a map, corresponding to the custom HTML tag <tg-map>.
 */
class RichBlockMap extends RichBlock implements Interfaces\RichBlockMapInterface
{
    /**
     * @param string                         $type     Type of the block, always “map”
     * @param LocationInterface              $location Location of the center of the map
     * @param int                            $zoom     Map zoom level; 13-20
     * @param int                            $width    Expected width of the map
     * @param int                            $height   Expected height of the map
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
