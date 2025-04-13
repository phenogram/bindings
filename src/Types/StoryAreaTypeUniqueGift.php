<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes a story area pointing to a unique gift. Currently, a story can have at most 1 unique gift area.
 */
class StoryAreaTypeUniqueGift extends StoryAreaType implements Interfaces\StoryAreaTypeUniqueGiftInterface
{
    /**
     * @param string $type Type of the area, always “unique_gift”
     * @param string $name Unique name of the gift
     */
    public function __construct(
        public string $type,
        public string $name,
    ) {
    }
}
