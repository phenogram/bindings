<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a story area pointing to an HTTP or tg:// link. Currently, a story can have up to 3 link areas.
 */
interface StoryAreaTypeLinkInterface extends TypeInterface
{
    /** @var string $type Type of the area, always “link” */
    public string $type { set; get; }

    /** @var string $url HTTP or tg:// URL to be opened when the area is clicked */
    public string $url { set; get; }
}
