<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The message was originally sent to a channel chat.
 */
interface MessageOriginChannelInterface extends TypeInterface
{
    /** @var string $type Type of the message origin, always “channel” */
    public string $type { set; }

    /** @var int $date Date the message was sent originally in Unix time */
    public int $date { set; }

    /** @var ChatInterface $chat Channel chat to which the message was originally sent */
    public ChatInterface $chat { set; }

    /** @var int $messageId Unique message identifier inside the chat */
    public int $messageId { set; }

    /** @var string|null $authorSignature Optional. Signature of the original post author */
    public ?string $authorSignature { set; }
}
