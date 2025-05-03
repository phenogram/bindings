<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a service message about a change in auto-delete timer settings.
 */
interface MessageAutoDeleteTimerChangedInterface extends TypeInterface
{
    /** @var int $messageAutoDeleteTime New auto-delete time for messages in the chat; in seconds */
    public int $messageAutoDeleteTime { set; get; }
}
