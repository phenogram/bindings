<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\StoryAreaTypeUniqueGiftInterface;
use Phenogram\Bindings\Types\StoryAreaTypeUniqueGift;

class StoryAreaTypeUniqueGiftFactory extends AbstractFactory
{
    /**
     * Creates a new StoryAreaTypeUniqueGift instance with default fake data.
     *
     * @param string|null $type Optional. Type of the area, always “unique_gift”
     * @param string|null $name Optional. Unique name of the gift
     */
    public static function make(?string $type = null, ?string $name = null): StoryAreaTypeUniqueGiftInterface
    {
        return self::factory()->makeStoryAreaTypeUniqueGift(
            type: $type ?? self::fake()->word(),
            name: $name ?? self::fake()->text(50),
        );
    }
}
