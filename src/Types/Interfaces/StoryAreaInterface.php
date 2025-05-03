<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a clickable area on a story media.
 */
interface StoryAreaInterface extends TypeInterface
{
    /** @var StoryAreaPositionInterface $position Position of the area */
    public StoryAreaPositionInterface $position { set; get; }

    /** @var StoryAreaTypeInterface $type Type of the area */
    public StoryAreaTypeInterface $type { set; get; }
}
