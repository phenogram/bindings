<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a chat member that has some additional privileges.
 */
interface ChatMemberAdministratorInterface extends TypeInterface
{
	/** @var string $status The member's status in the chat, always “administrator” */
	public string $status { set; get; }

	/** @var UserInterface $user Information about the user */
	public UserInterface $user { set; get; }

	/** @var bool $canBeEdited True, if the bot is allowed to edit administrator privileges of that user */
	public bool $canBeEdited { set; get; }

	/** @var bool $isAnonymous True, if the user's presence in the chat is hidden */
	public bool $isAnonymous { set; get; }

	/** @var bool $canManageChat True, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages and ignore slow mode. Implied by any other administrator privilege. */
	public bool $canManageChat { set; get; }

	/** @var bool $canDeleteMessages True, if the administrator can delete messages of other users */
	public bool $canDeleteMessages { set; get; }

	/** @var bool $canManageVideoChats True, if the administrator can manage video chats */
	public bool $canManageVideoChats { set; get; }

	/** @var bool $canRestrictMembers True, if the administrator can restrict, ban or unban chat members, or access supergroup statistics */
	public bool $canRestrictMembers { set; get; }

	/** @var bool $canPromoteMembers True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user) */
	public bool $canPromoteMembers { set; get; }

	/** @var bool $canChangeInfo True, if the user is allowed to change the chat title, photo and other settings */
	public bool $canChangeInfo { set; get; }

	/** @var bool $canInviteUsers True, if the user is allowed to invite new users to the chat */
	public bool $canInviteUsers { set; get; }

	/** @var bool $canPostStories True, if the administrator can post stories to the chat */
	public bool $canPostStories { set; get; }

	/** @var bool $canEditStories True, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive */
	public bool $canEditStories { set; get; }

	/** @var bool $canDeleteStories True, if the administrator can delete stories posted by other users */
	public bool $canDeleteStories { set; get; }

	/** @var bool|null $canPostMessages Optional. True, if the administrator can post messages in the channel, or access channel statistics; for channels only */
	public ?bool $canPostMessages { set; get; }

	/** @var bool|null $canEditMessages Optional. True, if the administrator can edit messages of other users and can pin messages; for channels only */
	public ?bool $canEditMessages { set; get; }

	/** @var bool|null $canPinMessages Optional. True, if the user is allowed to pin messages; for groups and supergroups only */
	public ?bool $canPinMessages { set; get; }

	/** @var bool|null $canManageTopics Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only */
	public ?bool $canManageTopics { set; get; }

	/** @var string|null $customTitle Optional. Custom title for this user */
	public ?string $customTitle { set; get; }
}
