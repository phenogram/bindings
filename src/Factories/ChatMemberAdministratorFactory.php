<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\ChatMemberAdministrator;
use Phenogram\Bindings\Types\Interfaces\ChatMemberAdministratorInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class ChatMemberAdministratorFactory extends AbstractFactory
{
    /**
     * Creates a new ChatMemberAdministrator instance with default fake data.
     *
     * @param string|null        $status              Optional. The member's status in the chat, always “administrator”
     * @param UserInterface|null $user                Optional. Information about the user
     * @param bool|null          $canBeEdited         Optional. True, if the bot is allowed to edit administrator privileges of that user
     * @param bool|null          $isAnonymous         Optional. True, if the user's presence in the chat is hidden
     * @param bool|null          $canManageChat       Optional. True, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages, ignore slow mode, and send messages to the chat without paying Telegram Stars. Implied by any other administrator privilege.
     * @param bool|null          $canDeleteMessages   Optional. True, if the administrator can delete messages of other users
     * @param bool|null          $canManageVideoChats Optional. True, if the administrator can manage video chats
     * @param bool|null          $canRestrictMembers  Optional. True, if the administrator can restrict, ban or unban chat members, or access supergroup statistics
     * @param bool|null          $canPromoteMembers   Optional. True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)
     * @param bool|null          $canChangeInfo       Optional. True, if the user is allowed to change the chat title, photo and other settings
     * @param bool|null          $canInviteUsers      Optional. True, if the user is allowed to invite new users to the chat
     * @param bool|null          $canPostStories      Optional. True, if the administrator can post stories to the chat
     * @param bool|null          $canEditStories      Optional. True, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
     * @param bool|null          $canDeleteStories    Optional. True, if the administrator can delete stories posted by other users
     * @param bool|null          $canPostMessages     Optional. Optional. True, if the administrator can post messages in the channel, approve suggested posts, or access channel statistics; for channels only
     * @param bool|null          $canEditMessages     Optional. Optional. True, if the administrator can edit messages of other users and can pin messages; for channels only
     * @param bool|null          $canPinMessages      Optional. Optional. True, if the user is allowed to pin messages; for groups and supergroups only
     * @param bool|null          $canManageTopics     Optional. Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
     * @param string|null        $customTitle         Optional. Optional. Custom title for this user
     */
    public static function make(
        ?string $status = null,
        ?UserInterface $user = null,
        ?bool $canBeEdited = null,
        ?bool $isAnonymous = null,
        ?bool $canManageChat = null,
        ?bool $canDeleteMessages = null,
        ?bool $canManageVideoChats = null,
        ?bool $canRestrictMembers = null,
        ?bool $canPromoteMembers = null,
        ?bool $canChangeInfo = null,
        ?bool $canInviteUsers = null,
        ?bool $canPostStories = null,
        ?bool $canEditStories = null,
        ?bool $canDeleteStories = null,
        ?bool $canPostMessages = null,
        ?bool $canEditMessages = null,
        ?bool $canPinMessages = null,
        ?bool $canManageTopics = null,
        ?string $customTitle = null,
    ): ChatMemberAdministratorInterface {
        return self::factory()->makeChatMemberAdministrator(
            status: $status ?? self::fake()->randomElement(['creator', 'administrator', 'member', 'restricted', 'left', 'kicked']),
            user: $user ?? User::make(),
            canBeEdited: $canBeEdited ?? self::fake()->boolean(),
            isAnonymous: $isAnonymous ?? self::fake()->boolean(),
            canManageChat: $canManageChat ?? self::fake()->boolean(),
            canDeleteMessages: $canDeleteMessages ?? self::fake()->boolean(),
            canManageVideoChats: $canManageVideoChats ?? self::fake()->boolean(),
            canRestrictMembers: $canRestrictMembers ?? self::fake()->boolean(),
            canPromoteMembers: $canPromoteMembers ?? self::fake()->boolean(),
            canChangeInfo: $canChangeInfo ?? self::fake()->boolean(),
            canInviteUsers: $canInviteUsers ?? self::fake()->boolean(),
            canPostStories: $canPostStories ?? self::fake()->boolean(),
            canEditStories: $canEditStories ?? self::fake()->boolean(),
            canDeleteStories: $canDeleteStories ?? self::fake()->boolean(),
            canPostMessages: $canPostMessages,
            canEditMessages: $canEditMessages,
            canPinMessages: $canPinMessages,
            canManageTopics: $canManageTopics,
            customTitle: $customTitle,
        );
    }
}
