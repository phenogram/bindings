<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes a story area pointing to an HTTP or tg:// link. Currently, a story can have up to 3 link areas.
 */
class StoryAreaTypeLink extends StoryAreaType implements Interfaces\StoryAreaTypeLinkInterface
{
    /**
     * @param string $type Type of the area, always “link”
     * @param string $url  HTTP or tg:// URL to be opened when the area is clicked
     */
    public function __construct(
        public string $type,
        public string $url,
    ) {
    }
}
