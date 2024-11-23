<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Represents a chat member that isn't currently a member of the chat, but may join it themselves.
 */
class ChatMemberLeft extends ChatMember implements Interfaces\ChatMemberLeftInterface
{
    /**
     * @param string        $status The member's status in the chat, always “left”
     * @param UserInterface $user   Information about the user
     */
    public function __construct(
        public string $status,
        public UserInterface $user,
    ) {
    }
}
