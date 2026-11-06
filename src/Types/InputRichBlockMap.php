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
     * @param int|null                       $zoom     Optional. Map zoom level; 0-24
     * @param int|null                       $width    Optional. Map width; 0-10000
     * @param int|null                       $height   Optional. Map height; 0-10000
     * @param RichBlockCaptionInterface|null $caption  Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public LocationInterface $location,
        public ?int $zoom = null,
        public ?int $width = null,
        public ?int $height = null,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
