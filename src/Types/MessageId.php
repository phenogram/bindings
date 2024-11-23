<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents a unique message identifier.
 */
class MessageId implements Interfaces\MessageIdInterface
{
    /**
     * @param int $messageId Unique message identifier. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent
     */
    public function __construct(
        public int $messageId,
    ) {
    }
}
