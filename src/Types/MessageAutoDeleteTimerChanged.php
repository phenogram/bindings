<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents a service message about a change in auto-delete timer settings.
 */
class MessageAutoDeleteTimerChanged implements Interfaces\MessageAutoDeleteTimerChangedInterface
{
    /**
     * @param int $messageAutoDeleteTime New auto-delete time for messages in the chat; in seconds
     */
    public function __construct(
        public int $messageAutoDeleteTime,
    ) {
    }
}
