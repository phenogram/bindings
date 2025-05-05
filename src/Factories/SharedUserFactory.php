<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\SharedUserInterface;
use Phenogram\Bindings\Types\SharedUser;

class SharedUserFactory extends AbstractFactory
{
    /**
     * Creates a new SharedUser instance with default fake data.
     *
     * @param int|null    $userId    Optional. Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means.
     * @param string|null $firstName Optional. Optional. First name of the user, if the name was requested by the bot
     * @param string|null $lastName  Optional. Optional. Last name of the user, if the name was requested by the bot
     * @param string|null $username  Optional. Optional. Username of the user, if the username was requested by the bot
     * @param array|null  $photo     Optional. Optional. Available sizes of the chat photo, if the photo was requested by the bot
     */
    public static function make(
        ?int $userId = null,
        ?string $firstName = null,
        ?string $lastName = null,
        ?string $username = null,
        ?array $photo = null,
    ): SharedUserInterface {
        return self::factory()->makeSharedUser(
            userId: $userId ?? self::fake()->numberBetween(100000, 999999999),
            firstName: $firstName,
            lastName: $lastName,
            username: $username,
            photo: $photo,
        );
    }
}
