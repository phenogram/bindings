<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents changes in the status of a chat member.
 */
interface ChatMemberUpdatedInterface extends TypeInterface
{
    /** @var ChatInterface $chat Chat the user belongs to */
    public ChatInterface $chat { set; get; }

    /** @var UserInterface $from Performer of the action, which resulted in the change */
    public UserInterface $from { set; get; }

    /** @var int $date Date the change was done in Unix time */
    public int $date { set; get; }

    /** @var ChatMemberInterface $oldChatMember Previous information about the chat member */
    public ChatMemberInterface $oldChatMember { set; get; }

    /** @var ChatMemberInterface $newChatMember New information about the chat member */
    public ChatMemberInterface $newChatMember { set; get; }

    /** @var ChatInviteLinkInterface|null $inviteLink Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only. */
    public ?ChatInviteLinkInterface $inviteLink { set; get; }

    /** @var bool|null $viaJoinRequest Optional. True, if the user joined the chat after sending a direct join request without using an invite link and being approved by an administrator */
    public ?bool $viaJoinRequest { set; get; }

    /** @var bool|null $viaChatFolderInviteLink Optional. True, if the user joined the chat via a chat folder invite link */
    public ?bool $viaChatFolderInviteLink { set; get; }
}
