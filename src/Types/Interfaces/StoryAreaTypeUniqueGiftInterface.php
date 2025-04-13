<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a story area pointing to a unique gift. Currently, a story can have at most 1 unique gift area.
 */
interface StoryAreaTypeUniqueGiftInterface extends TypeInterface
{
    /** @var string $type Type of the area, always “unique_gift” */
    public string $type { set; }

    /** @var string $name Unique name of the gift */
    public string $name { set; }
}
