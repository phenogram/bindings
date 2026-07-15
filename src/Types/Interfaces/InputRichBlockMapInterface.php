<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block with a map, corresponding to the custom HTML tag <tg-map>. The map's width and height must not exceed 10000 in total. The width and height ratio must be at most 20.
 */
interface InputRichBlockMapInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “map” */
    public string $type { set; get; }

    /** @var LocationInterface $location Location of the center of the map */
    public LocationInterface $location { set; get; }

    /** @var int $zoom Map zoom level; 0-24 */
    public int $zoom { set; get; }

    /** @var int $width Map width; 0-10000 */
    public int $width { set; get; }

    /** @var int $height Map height; 0-10000 */
    public int $height { set; get; }

    /** @var RichBlockCaptionInterface|null $caption Optional. Caption of the block */
    public ?RichBlockCaptionInterface $caption { set; get; }
}
