<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents reaction changes on a message with anonymous reactions.
 */
interface MessageReactionCountUpdatedInterface extends TypeInterface
{
    /** @var ChatInterface $chat The chat containing the message */
    public ChatInterface $chat { set; }

    /** @var int $messageId Unique message identifier inside the chat */
    public int $messageId { set; }

    /** @var int $date Date of the change in Unix time */
    public int $date { set; }

    /** @var array<ReactionCountInterface> $reactions List of reactions that are present on the message */
    public array $reactions { set; }
}
