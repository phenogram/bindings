<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\LocationFactory as Location;
use Phenogram\Bindings\Types\InputRichBlockMap;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockMapInterface;
use Phenogram\Bindings\Types\Interfaces\LocationInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

class InputRichBlockMapFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockMap instance with default fake data.
     *
     * @param string|null                    $type     Optional. Type of the block, always “map”
     * @param LocationInterface|null         $location Optional. Location of the center of the map
     * @param int|null                       $zoom     Optional. Map zoom level; 0-24
     * @param int|null                       $width    Optional. Map width; 0-10000
     * @param int|null                       $height   Optional. Map height; 0-10000
     * @param RichBlockCaptionInterface|null $caption  Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?LocationInterface $location = null,
        ?int $zoom = null,
        ?int $width = null,
        ?int $height = null,
        ?RichBlockCaptionInterface $caption = null,
    ): InputRichBlockMapInterface {
        return self::factory()->makeInputRichBlockMap(
            type: $type ?? self::fake()->word(),
            location: $location ?? Location::make(),
            zoom: $zoom ?? self::fake()->randomNumber(),
            width: $width ?? self::fake()->numberBetween(10, 1000),
            height: $height ?? self::fake()->numberBetween(10, 1000),
            caption: $caption,
        );
    }
}
