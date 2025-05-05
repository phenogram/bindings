<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\ChatMemberMember;
use Phenogram\Bindings\Types\Interfaces\ChatMemberMemberInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class ChatMemberMemberFactory extends AbstractFactory
{
    /**
     * Creates a new ChatMemberMember instance with default fake data.
     *
     * @param string|null        $status    Optional. The member's status in the chat, always “member”
     * @param UserInterface|null $user      Optional. Information about the user
     * @param int|null           $untilDate Optional. Optional. Date when the user's subscription will expire; Unix time
     */
    public static function make(
        ?string $status = null,
        ?UserInterface $user = null,
        ?int $untilDate = null,
    ): ChatMemberMemberInterface {
        return self::factory()->makeChatMemberMember(
            status: $status ?? self::fake()->randomElement(['creator', 'administrator', 'member', 'restricted', 'left', 'kicked']),
            user: $user ?? User::make(),
            untilDate: $untilDate,
        );
    }
}
