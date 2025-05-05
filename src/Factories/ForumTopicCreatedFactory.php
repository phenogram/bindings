<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\ForumTopicCreated;
use Phenogram\Bindings\Types\Interfaces\ForumTopicCreatedInterface;

class ForumTopicCreatedFactory extends AbstractFactory
{
    /**
     * Creates a new ForumTopicCreated instance with default fake data.
     *
     * @param string|null $name              Optional. Name of the topic
     * @param int|null    $iconColor         Optional. Color of the topic icon in RGB format
     * @param string|null $iconCustomEmojiId Optional. Optional. Unique identifier of the custom emoji shown as the topic icon
     */
    public static function make(
        ?string $name = null,
        ?int $iconColor = null,
        ?string $iconCustomEmojiId = null,
    ): ForumTopicCreatedInterface {
        return self::factory()->makeForumTopicCreated(
            name: $name ?? self::fake()->text(50),
            iconColor: $iconColor ?? self::fake()->randomNumber(),
            iconCustomEmojiId: $iconCustomEmojiId,
        );
    }
}
