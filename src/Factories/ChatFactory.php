<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Chat;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;

class ChatFactory extends AbstractFactory
{
    /**
     * Creates a new Chat instance with default fake data.
     *
     * @param int|null    $id        Optional. Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param string|null $type      Optional. Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
     * @param string|null $title     Optional. Optional. Title, for supergroups, channels and group chats
     * @param string|null $username  Optional. Optional. Username, for private chats, supergroups and channels if available
     * @param string|null $firstName Optional. Optional. First name of the other party in a private chat
     * @param string|null $lastName  Optional. Optional. Last name of the other party in a private chat
     * @param bool|null   $isForum   Optional. Optional. True, if the supergroup chat is a forum (has topics enabled)
     */
    public static function make(
        ?int $id = null,
        ?string $type = null,
        ?string $title = null,
        ?string $username = null,
        ?string $firstName = null,
        ?string $lastName = null,
        ?bool $isForum = null,
    ): ChatInterface {
        return self::factory()->makeChat(
            id: $id ?? self::fake()->numberBetween(100000, 999999999),
            type: $type ?? self::fake()->randomElement(['private', 'group', 'supergroup', 'channel']),
            title: $title,
            username: $username,
            firstName: $firstName,
            lastName: $lastName,
            isForum: $isForum,
        );
    }
}
