<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * This object represents a service message about new members invited to a video chat.
 */
class VideoChatParticipantsInvited implements Interfaces\VideoChatParticipantsInvitedInterface
{
    /**
     * @param array<UserInterface> $users New members that were invited to the video chat
     */
    public function __construct(
        public array $users,
    ) {
    }
}
