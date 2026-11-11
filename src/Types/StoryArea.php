<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\AreaPositionInterface;
use Phenogram\Bindings\Types\Interfaces\StoryAreaTypeInterface;

/**
 * Describes a clickable area on a story media.
 */
class StoryArea implements Interfaces\StoryAreaInterface
{
    /**
     * @param AreaPositionInterface  $position Position of the area
     * @param StoryAreaTypeInterface $type     Type of the area
     */
    public function __construct(
        public AreaPositionInterface $position,
        public StoryAreaTypeInterface $type,
    ) {
    }
}
