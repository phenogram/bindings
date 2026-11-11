<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\AreaPositionFactory as AreaPosition;
use Phenogram\Bindings\Types\Interfaces\AreaPositionInterface;
use Phenogram\Bindings\Types\Interfaces\StoryAreaInterface;
use Phenogram\Bindings\Types\StoryArea;

class StoryAreaFactory extends AbstractFactory
{
    /**
     * Creates a new StoryArea instance with default fake data.
     *
     * @param AreaPositionInterface|null                                       $position Optional. Position of the area
     * @param \Phenogram\Bindings\Types\Interfaces\StoryAreaTypeInterface|null $type     Optional. Type of the area
     */
    public static function make(
        ?AreaPositionInterface $position = null,
        ?\Phenogram\Bindings\Types\Interfaces\StoryAreaTypeInterface $type = null,
    ): StoryAreaInterface {
        return self::factory()->makeStoryArea(
            position: $position ?? AreaPosition::make(),
            type: $type ?? '[Abstract type: StoryAreaType]',
        );
    }
}
