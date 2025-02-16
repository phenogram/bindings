<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a service message about a new forum topic created in the chat.
 */
interface ForumTopicCreatedInterface extends TypeInterface
{
    /** @var string $name Name of the topic */
    public string $name { set; }

    /** @var int $iconColor Color of the topic icon in RGB format */
    public int $iconColor { set; }

    /** @var string|null $iconCustomEmojiId Optional. Unique identifier of the custom emoji shown as the topic icon */
    public ?string $iconCustomEmojiId { set; }
}
