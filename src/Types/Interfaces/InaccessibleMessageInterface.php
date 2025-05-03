<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes a message that was deleted or is otherwise inaccessible to the bot.
 */
interface InaccessibleMessageInterface extends TypeInterface
{
    /** @var ChatInterface $chat Chat the message belonged to */
    public ChatInterface $chat { set; get; }

    /** @var int $messageId Unique message identifier inside the chat */
    public int $messageId { set; get; }

    /** @var int $date Always 0. The field can be used to differentiate regular and inaccessible messages. */
    public int $date { set; get; }
}
