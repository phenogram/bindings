<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 */
class ChatMemberBanned extends ChatMember implements Interfaces\ChatMemberBannedInterface
{
    /**
     * @param string        $status    The member's status in the chat, always “kicked”
     * @param UserInterface $user      Information about the user
     * @param int           $untilDate Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever
     */
    public function __construct(
        public string $status,
        public UserInterface $user,
        public int $untilDate,
    ) {
    }
}
