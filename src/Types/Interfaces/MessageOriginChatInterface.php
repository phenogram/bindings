<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The message was originally sent on behalf of a chat to a group chat.
 */
interface MessageOriginChatInterface extends TypeInterface
{
    /** @var string $type Type of the message origin, always “chat” */
    public string $type { set; }

    /** @var int $date Date the message was sent originally in Unix time */
    public int $date { set; }

    /** @var ChatInterface $senderChat Chat that sent the message originally */
    public ChatInterface $senderChat { set; }

    /** @var string|null $authorSignature Optional. For messages originally sent by an anonymous chat administrator, original message author signature */
    public ?string $authorSignature { set; }
}
