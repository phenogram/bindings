<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a service message about an edited forum topic.
 */
interface ForumTopicEditedInterface extends TypeInterface
{
    /** @var string|null $name Optional. New name of the topic, if it was edited */
    public ?string $name { set; }

    /** @var string|null $iconCustomEmojiId Optional. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was removed */
    public ?string $iconCustomEmojiId { set; }
}
