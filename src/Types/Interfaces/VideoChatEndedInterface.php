<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a service message about a video chat ended in the chat.
 */
interface VideoChatEndedInterface extends TypeInterface
{
    /** @var int $duration Video chat duration in seconds */
    public int $duration { set; get; }
}
