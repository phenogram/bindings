<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\KeyboardButtonRequestUsersInterface;
use Phenogram\Bindings\Types\KeyboardButtonRequestUsers;

class KeyboardButtonRequestUsersFactory extends AbstractFactory
{
    /**
     * Creates a new KeyboardButtonRequestUsers instance with default fake data.
     *
     * @param int|null  $requestId       Optional. Signed 32-bit identifier of the request that will be received back in the UsersShared object. Must be unique within the message
     * @param bool|null $userIsBot       Optional. Optional. Pass True to request bots, pass False to request regular users. If not specified, no additional restrictions are applied.
     * @param bool|null $userIsPremium   Optional. Optional. Pass True to request premium users, pass False to request non-premium users. If not specified, no additional restrictions are applied.
     * @param int|null  $maxQuantity     Optional. Optional. The maximum number of users to be selected; 1-10. Defaults to 1.
     * @param bool|null $requestName     Optional. Optional. Pass True to request the users' first and last names
     * @param bool|null $requestUsername Optional. Optional. Pass True to request the users' usernames
     * @param bool|null $requestPhoto    Optional. Optional. Pass True to request the users' photos
     */
    public static function make(
        ?int $requestId = null,
        ?bool $userIsBot = null,
        ?bool $userIsPremium = null,
        ?int $maxQuantity = null,
        ?bool $requestName = null,
        ?bool $requestUsername = null,
        ?bool $requestPhoto = null,
    ): KeyboardButtonRequestUsersInterface {
        return self::factory()->makeKeyboardButtonRequestUsers(
            requestId: $requestId ?? self::fake()->numberBetween(100000, 999999999),
            userIsBot: $userIsBot,
            userIsPremium: $userIsPremium,
            maxQuantity: $maxQuantity,
            requestName: $requestName,
            requestUsername: $requestUsername,
            requestPhoto: $requestPhoto,
        );
    }
}
