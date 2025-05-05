<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\ForumTopic;
use Phenogram\Bindings\Types\Interfaces\ForumTopicInterface;

class ForumTopicFactory extends AbstractFactory
{
    /**
     * Creates a new ForumTopic instance with default fake data.
     *
     * @param int|null    $messageThreadId   Optional. Unique identifier of the forum topic
     * @param string|null $name              Optional. Name of the topic
     * @param int|null    $iconColor         Optional. Color of the topic icon in RGB format
     * @param string|null $iconCustomEmojiId Optional. Optional. Unique identifier of the custom emoji shown as the topic icon
     */
    public static function make(
        ?int $messageThreadId = null,
        ?string $name = null,
        ?int $iconColor = null,
        ?string $iconCustomEmojiId = null,
    ): ForumTopicInterface {
        return self::factory()->makeForumTopic(
            messageThreadId: $messageThreadId ?? self::fake()->numberBetween(100000, 999999999),
            name: $name ?? self::fake()->text(50),
            iconColor: $iconColor ?? self::fake()->randomNumber(),
            iconCustomEmojiId: $iconCustomEmojiId,
        );
    }
}
