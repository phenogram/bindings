<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;

/**
 * This object describes a message that was deleted or is otherwise inaccessible to the bot.
 */
class InaccessibleMessage extends MaybeInaccessibleMessage implements Interfaces\InaccessibleMessageInterface
{
    /**
     * @param ChatInterface $chat      Chat the message belonged to
     * @param int           $messageId Unique message identifier inside the chat
     * @param int           $date      Always 0. The field can be used to differentiate regular and inaccessible messages.
     */
    public function __construct(
        public ChatInterface $chat,
        public int $messageId,
        public int $date,
    ) {
    }
}
