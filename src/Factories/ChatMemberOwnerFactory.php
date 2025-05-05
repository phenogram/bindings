<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\ChatMemberOwner;
use Phenogram\Bindings\Types\Interfaces\ChatMemberOwnerInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class ChatMemberOwnerFactory extends AbstractFactory
{
    /**
     * Creates a new ChatMemberOwner instance with default fake data.
     *
     * @param string|null        $status      Optional. The member's status in the chat, always “creator”
     * @param UserInterface|null $user        Optional. Information about the user
     * @param bool|null          $isAnonymous Optional. True, if the user's presence in the chat is hidden
     * @param string|null        $customTitle Optional. Optional. Custom title for this user
     */
    public static function make(
        ?string $status = null,
        ?UserInterface $user = null,
        ?bool $isAnonymous = null,
        ?string $customTitle = null,
    ): ChatMemberOwnerInterface {
        return self::factory()->makeChatMemberOwner(
            status: $status ?? self::fake()->randomElement(['creator', 'administrator', 'member', 'restricted', 'left', 'kicked']),
            user: $user ?? User::make(),
            isAnonymous: $isAnonymous ?? self::fake()->boolean(),
            customTitle: $customTitle,
        );
    }
}
