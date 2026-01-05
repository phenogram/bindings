<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents a service message about a new forum topic created in the chat.
 */
class ForumTopicCreated implements Interfaces\ForumTopicCreatedInterface
{
    /**
     * @param string      $name              Name of the topic
     * @param int         $iconColor         Color of the topic icon in RGB format
     * @param string|null $iconCustomEmojiId Optional. Unique identifier of the custom emoji shown as the topic icon
     * @param bool|null   $isNameImplicit    Optional. True, if the name of the topic wasn't specified explicitly by its creator and likely needs to be changed by the bot
     */
    public function __construct(
        public string $name,
        public int $iconColor,
        public ?string $iconCustomEmojiId = null,
        public ?bool $isNameImplicit = null,
    ) {
    }
}
