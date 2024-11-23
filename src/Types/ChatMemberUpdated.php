<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\ChatInviteLinkInterface;
use Phenogram\Bindings\Types\Interfaces\ChatMemberInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * This object represents changes in the status of a chat member.
 */
class ChatMemberUpdated implements Interfaces\ChatMemberUpdatedInterface
{
    /**
     * @param ChatInterface                $chat                    Chat the user belongs to
     * @param UserInterface                $from                    Performer of the action, which resulted in the change
     * @param int                          $date                    Date the change was done in Unix time
     * @param ChatMemberInterface          $oldChatMember           Previous information about the chat member
     * @param ChatMemberInterface          $newChatMember           New information about the chat member
     * @param ChatInviteLinkInterface|null $inviteLink              Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
     * @param bool|null                    $viaJoinRequest          Optional. True, if the user joined the chat after sending a direct join request without using an invite link and being approved by an administrator
     * @param bool|null                    $viaChatFolderInviteLink Optional. True, if the user joined the chat via a chat folder invite link
     */
    public function __construct(
        public ChatInterface $chat,
        public UserInterface $from,
        public int $date,
        public ChatMemberInterface $oldChatMember,
        public ChatMemberInterface $newChatMember,
        public ?ChatInviteLinkInterface $inviteLink = null,
        public ?bool $viaJoinRequest = null,
        public ?bool $viaChatFolderInviteLink = null,
    ) {
    }
}
