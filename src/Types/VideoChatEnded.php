<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents a service message about a video chat ended in the chat.
 */
class VideoChatEnded implements Interfaces\VideoChatEndedInterface
{
    /**
     * @param int $duration Video chat duration in seconds
     */
    public function __construct(
        public int $duration,
    ) {
    }
}
