<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\StoryAreaPositionFactory as StoryAreaPosition;
use Phenogram\Bindings\Types\Interfaces\StoryAreaInterface;
use Phenogram\Bindings\Types\Interfaces\StoryAreaPositionInterface;
use Phenogram\Bindings\Types\StoryArea;

class StoryAreaFactory extends AbstractFactory
{
    /**
     * Creates a new StoryArea instance with default fake data.
     *
     * @param StoryAreaPositionInterface|null                                  $position Optional. Position of the area
     * @param \Phenogram\Bindings\Types\Interfaces\StoryAreaTypeInterface|null $type     Optional. Type of the area
     */
    public static function make(
        ?StoryAreaPositionInterface $position = null,
        ?\Phenogram\Bindings\Types\Interfaces\StoryAreaTypeInterface $type = null,
    ): StoryAreaInterface {
        return self::factory()->makeStoryArea(
            position: $position ?? StoryAreaPosition::make(),
            type: $type ?? '[Abstract type: StoryAreaType]',
        );
    }
}
