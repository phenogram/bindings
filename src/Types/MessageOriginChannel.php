<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;

/**
 * The message was originally sent to a channel chat.
 */
class MessageOriginChannel extends MessageOrigin implements Interfaces\MessageOriginChannelInterface
{
    /**
     * @param string        $type            Type of the message origin, always “channel”
     * @param int           $date            Date the message was sent originally in Unix time
     * @param ChatInterface $chat            Channel chat to which the message was originally sent
     * @param int           $messageId       Unique message identifier inside the chat
     * @param string|null   $authorSignature Optional. Signature of the original post author
     */
    public function __construct(
        public string $type,
        public int $date,
        public ChatInterface $chat,
        public int $messageId,
        public ?string $authorSignature = null,
    ) {
    }
}
