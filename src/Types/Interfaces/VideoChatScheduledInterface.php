<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a service message about a video chat scheduled in the chat.
 */
interface VideoChatScheduledInterface extends TypeInterface
{
    /** @var int $startDate Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator */
    public int $startDate { set; }
}
