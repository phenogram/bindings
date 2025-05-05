<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\VideoChatParticipantsInvitedInterface;
use Phenogram\Bindings\Types\VideoChatParticipantsInvited;

class VideoChatParticipantsInvitedFactory extends AbstractFactory
{
    /**
     * Creates a new VideoChatParticipantsInvited instance with default fake data.
     *
     * @param array|null $users Optional. New members that were invited to the video chat
     */
    public static function make(?array $users = null): VideoChatParticipantsInvitedInterface
    {
        return self::factory()->makeVideoChatParticipantsInvited(
            users: $users ?? array_map(fn () => User::make(), range(0, self::fake()->numberBetween(0, 2))),
        );
    }
}
