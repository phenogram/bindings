<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\StoryAreaPositionInterface;
use Phenogram\Bindings\Types\Interfaces\StoryAreaTypeInterface;

/**
 * Describes a clickable area on a story media.
 */
class StoryArea implements Interfaces\StoryAreaInterface
{
    /**
     * @param StoryAreaPositionInterface $position Position of the area
     * @param StoryAreaTypeInterface     $type     Type of the area
     */
    public function __construct(
        public StoryAreaPositionInterface $position,
        public StoryAreaTypeInterface $type,
    ) {
    }
}
