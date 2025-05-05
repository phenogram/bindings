<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\ChatMemberBanned;
use Phenogram\Bindings\Types\Interfaces\ChatMemberBannedInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class ChatMemberBannedFactory extends AbstractFactory
{
    /**
     * Creates a new ChatMemberBanned instance with default fake data.
     *
     * @param string|null        $status    Optional. The member's status in the chat, always “kicked”
     * @param UserInterface|null $user      Optional. Information about the user
     * @param int|null           $untilDate Optional. Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever
     */
    public static function make(
        ?string $status = null,
        ?UserInterface $user = null,
        ?int $untilDate = null,
    ): ChatMemberBannedInterface {
        return self::factory()->makeChatMemberBanned(
            status: $status ?? self::fake()->randomElement(['creator', 'administrator', 'member', 'restricted', 'left', 'kicked']),
            user: $user ?? User::make(),
            untilDate: $untilDate ?? self::fake()->unixTime(),
        );
    }
}
