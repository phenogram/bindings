<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a forum topic.
 */
interface ForumTopicInterface extends TypeInterface
{
    /** @var int $messageThreadId Unique identifier of the forum topic */
    public int $messageThreadId { set; }

    /** @var string $name Name of the topic */
    public string $name { set; }

    /** @var int $iconColor Color of the topic icon in RGB format */
    public int $iconColor { set; }

    /** @var string|null $iconCustomEmojiId Optional. Unique identifier of the custom emoji shown as the topic icon */
    public ?string $iconCustomEmojiId { set; }
}
