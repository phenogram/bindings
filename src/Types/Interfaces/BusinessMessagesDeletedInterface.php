<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object is received when messages are deleted from a connected business account.
 */
interface BusinessMessagesDeletedInterface extends TypeInterface
{
    /** @var string $businessConnectionId Unique identifier of the business connection */
    public string $businessConnectionId { set; get; }

    /** @var ChatInterface $chat Information about a chat in the business account. The bot may not have access to the chat or the corresponding user. */
    public ChatInterface $chat { set; get; }

    /** @var array<int> $messageIds The list of identifiers of deleted messages in the chat of the business account */
    public array $messageIds { set; get; }
}
