<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;

/**
 * This object is received when messages are deleted from a connected business account.
 */
class BusinessMessagesDeleted implements Interfaces\BusinessMessagesDeletedInterface
{
    /**
     * @param string        $businessConnectionId Unique identifier of the business connection
     * @param ChatInterface $chat                 Information about a chat in the business account. The bot may not have access to the chat or the corresponding user.
     * @param array<int>    $messageIds           The list of identifiers of deleted messages in the chat of the business account
     */
    public function __construct(
        public string $businessConnectionId,
        public ChatInterface $chat,
        public array $messageIds,
    ) {
    }
}
