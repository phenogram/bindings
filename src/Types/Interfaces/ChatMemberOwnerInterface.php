<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a chat member that owns the chat and has all administrator privileges.
 */
interface ChatMemberOwnerInterface extends TypeInterface
{
	/** @var string $status The member's status in the chat, always “creator” */
	public string $status { set; get; }

	/** @var UserInterface $user Information about the user */
	public UserInterface $user { set; get; }

	/** @var bool $isAnonymous True, if the user's presence in the chat is hidden */
	public bool $isAnonymous { set; get; }

	/** @var string|null $customTitle Optional. Custom title for this user */
	public ?string $customTitle { set; get; }
}
