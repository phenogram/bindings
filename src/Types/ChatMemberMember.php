<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Represents a chat member that has no additional privileges or restrictions.
 */
class ChatMemberMember extends ChatMember implements Interfaces\ChatMemberMemberInterface
{
    /**
     * @param string        $status    The member's status in the chat, always “member”
     * @param UserInterface $user      Information about the user
     * @param string|null   $tag       Optional. Tag of the member
     * @param int|null      $untilDate Optional. Date when the user's subscription will expire; Unix time
     */
    public function __construct(
        public string $status,
        public UserInterface $user,
        public ?string $tag = null,
        public ?int $untilDate = null,
    ) {
    }
}
