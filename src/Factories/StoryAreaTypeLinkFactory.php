<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\StoryAreaTypeLinkInterface;
use Phenogram\Bindings\Types\StoryAreaTypeLink;

class StoryAreaTypeLinkFactory extends AbstractFactory
{
    /**
     * Creates a new StoryAreaTypeLink instance with default fake data.
     *
     * @param string|null $type Optional. Type of the area, always “link”
     * @param string|null $url  Optional. HTTP or tg:// URL to be opened when the area is clicked
     */
    public static function make(?string $type = null, ?string $url = null): StoryAreaTypeLinkInterface
    {
        return self::factory()->makeStoryAreaTypeLink(
            type: $type ?? self::fake()->word(),
            url: $url ?? self::fake()->url(),
        );
    }
}
