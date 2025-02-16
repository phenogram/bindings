<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents the rights of an administrator in a chat.
 */
interface ChatAdministratorRightsInterface extends TypeInterface
{
    /** @var bool $isAnonymous True, if the user's presence in the chat is hidden */
    public bool $isAnonymous { set; }

    /** @var bool $canManageChat True, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages and ignore slow mode. Implied by any other administrator privilege. */
    public bool $canManageChat { set; }

    /** @var bool $canDeleteMessages True, if the administrator can delete messages of other users */
    public bool $canDeleteMessages { set; }

    /** @var bool $canManageVideoChats True, if the administrator can manage video chats */
    public bool $canManageVideoChats { set; }

    /** @var bool $canRestrictMembers True, if the administrator can restrict, ban or unban chat members, or access supergroup statistics */
    public bool $canRestrictMembers { set; }

    /** @var bool $canPromoteMembers True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user) */
    public bool $canPromoteMembers { set; }

    /** @var bool $canChangeInfo True, if the user is allowed to change the chat title, photo and other settings */
    public bool $canChangeInfo { set; }

    /** @var bool $canInviteUsers True, if the user is allowed to invite new users to the chat */
    public bool $canInviteUsers { set; }

    /** @var bool $canPostStories True, if the administrator can post stories to the chat */
    public bool $canPostStories { set; }

    /** @var bool $canEditStories True, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive */
    public bool $canEditStories { set; }

    /** @var bool $canDeleteStories True, if the administrator can delete stories posted by other users */
    public bool $canDeleteStories { set; }

    /** @var bool|null $canPostMessages Optional. True, if the administrator can post messages in the channel, or access channel statistics; for channels only */
    public ?bool $canPostMessages { set; }

    /** @var bool|null $canEditMessages Optional. True, if the administrator can edit messages of other users and can pin messages; for channels only */
    public ?bool $canEditMessages { set; }

    /** @var bool|null $canPinMessages Optional. True, if the user is allowed to pin messages; for groups and supergroups only */
    public ?bool $canPinMessages { set; }

    /** @var bool|null $canManageTopics Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only */
    public ?bool $canManageTopics { set; }
}
