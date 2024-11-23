<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a service message about new members invited to a video chat.
 */
interface VideoChatParticipantsInvitedInterface extends TypeInterface
{
	/** @var array<UserInterface> $users New members that were invited to the video chat */
	public array $users { set; get; }
}
