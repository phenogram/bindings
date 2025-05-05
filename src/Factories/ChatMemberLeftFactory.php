<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\ChatMemberLeft;
use Phenogram\Bindings\Types\Interfaces\ChatMemberLeftInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class ChatMemberLeftFactory extends AbstractFactory
{
    /**
     * Creates a new ChatMemberLeft instance with default fake data.
     *
     * @param string|null        $status Optional. The member's status in the chat, always “left”
     * @param UserInterface|null $user   Optional. Information about the user
     */
    public static function make(?string $status = null, ?UserInterface $user = null): ChatMemberLeftInterface
    {
        return self::factory()->makeChatMemberLeft(
            status: $status ?? self::fake()->randomElement(['creator', 'administrator', 'member', 'restricted', 'left', 'kicked']),
            user: $user ?? User::make(),
        );
    }
}
