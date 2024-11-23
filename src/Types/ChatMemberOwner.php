<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Represents a chat member that owns the chat and has all administrator privileges.
 */
class ChatMemberOwner extends ChatMember implements Interfaces\ChatMemberOwnerInterface
{
    /**
     * @param string        $status      The member's status in the chat, always “creator”
     * @param UserInterface $user        Information about the user
     * @param bool          $isAnonymous True, if the user's presence in the chat is hidden
     * @param string|null   $customTitle Optional. Custom title for this user
     */
    public function __construct(
        public string $status,
        public UserInterface $user,
        public bool $isAnonymous,
        public ?string $customTitle = null,
    ) {
    }
}
