<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block with a map, corresponding to the custom HTML tag <tg-map>.
 */
interface RichBlockMapInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “map” */
    public string $type { set; get; }

    /** @var LocationInterface $location Location of the center of the map */
    public LocationInterface $location { set; get; }

    /** @var int $zoom Map zoom level; 13-20 */
    public int $zoom { set; get; }

    /** @var int $width Expected width of the map */
    public int $width { set; get; }

    /** @var int $height Expected height of the map */
    public int $height { set; get; }

    /** @var RichBlockCaptionInterface|null $caption Optional. Caption of the block */
    public ?RichBlockCaptionInterface $caption { set; get; }
}
