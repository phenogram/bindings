<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\ChatMemberUpdated;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\ChatInviteLinkInterface;
use Phenogram\Bindings\Types\Interfaces\ChatMemberUpdatedInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class ChatMemberUpdatedFactory extends AbstractFactory
{
    /**
     * Creates a new ChatMemberUpdated instance with default fake data.
     *
     * @param ChatInterface|null                                            $chat                    Optional. Chat the user belongs to
     * @param UserInterface|null                                            $from                    Optional. Performer of the action, which resulted in the change
     * @param int|null                                                      $date                    Optional. Date the change was done in Unix time
     * @param \Phenogram\Bindings\Types\Interfaces\ChatMemberInterface|null $oldChatMember           Optional. Previous information about the chat member
     * @param \Phenogram\Bindings\Types\Interfaces\ChatMemberInterface|null $newChatMember           Optional. New information about the chat member
     * @param ChatInviteLinkInterface|null                                  $inviteLink              Optional. Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
     * @param bool|null                                                     $viaJoinRequest          Optional. Optional. True, if the user joined the chat after sending a direct join request without using an invite link and being approved by an administrator
     * @param bool|null                                                     $viaChatFolderInviteLink Optional. Optional. True, if the user joined the chat via a chat folder invite link
     */
    public static function make(
        ?ChatInterface $chat = null,
        ?UserInterface $from = null,
        ?int $date = null,
        ?\Phenogram\Bindings\Types\Interfaces\ChatMemberInterface $oldChatMember = null,
        ?\Phenogram\Bindings\Types\Interfaces\ChatMemberInterface $newChatMember = null,
        ?ChatInviteLinkInterface $inviteLink = null,
        ?bool $viaJoinRequest = null,
        ?bool $viaChatFolderInviteLink = null,
    ): ChatMemberUpdatedInterface {
        return self::factory()->makeChatMemberUpdated(
            chat: $chat ?? Chat::make(),
            from: $from ?? User::make(),
            date: $date ?? self::fake()->unixTime(),
            oldChatMember: $oldChatMember ?? '[Abstract type: ChatMember]',
            newChatMember: $newChatMember ?? '[Abstract type: ChatMember]',
            inviteLink: $inviteLink,
            viaJoinRequest: $viaJoinRequest,
            viaChatFolderInviteLink: $viaChatFolderInviteLink,
        );
    }
}
