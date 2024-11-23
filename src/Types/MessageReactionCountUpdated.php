<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\ReactionCountInterface;

/**
 * This object represents reaction changes on a message with anonymous reactions.
 */
class MessageReactionCountUpdated implements Interfaces\MessageReactionCountUpdatedInterface
{
    /**
     * @param ChatInterface                 $chat      The chat containing the message
     * @param int                           $messageId Unique message identifier inside the chat
     * @param int                           $date      Date of the change in Unix time
     * @param array<ReactionCountInterface> $reactions List of reactions that are present on the message
     */
    public function __construct(
        public ChatInterface $chat,
        public int $messageId,
        public int $date,
        public array $reactions,
    ) {
    }
}
