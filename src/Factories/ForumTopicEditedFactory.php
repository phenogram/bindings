<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\ForumTopicEdited;
use Phenogram\Bindings\Types\Interfaces\ForumTopicEditedInterface;

class ForumTopicEditedFactory extends AbstractFactory
{
    /**
     * Creates a new ForumTopicEdited instance with default fake data.
     *
     * @param string|null $name              Optional. Optional. New name of the topic, if it was edited
     * @param string|null $iconCustomEmojiId Optional. Optional. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was removed
     */
    public static function make(?string $name = null, ?string $iconCustomEmojiId = null): ForumTopicEditedInterface
    {
        return self::factory()->makeForumTopicEdited(
            name: $name,
            iconCustomEmojiId: $iconCustomEmojiId,
        );
    }
}
