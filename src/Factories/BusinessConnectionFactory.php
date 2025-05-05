<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\BusinessConnection;
use Phenogram\Bindings\Types\Interfaces\BusinessBotRightsInterface;
use Phenogram\Bindings\Types\Interfaces\BusinessConnectionInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class BusinessConnectionFactory extends AbstractFactory
{
    /**
     * Creates a new BusinessConnection instance with default fake data.
     *
     * @param string|null                     $id         Optional. Unique identifier of the business connection
     * @param UserInterface|null              $user       Optional. Business account user that created the business connection
     * @param int|null                        $userChatId Optional. Identifier of a private chat with the user who created the business connection. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param int|null                        $date       Optional. Date the connection was established in Unix time
     * @param BusinessBotRightsInterface|null $rights     Optional. Optional. Rights of the business bot
     * @param bool|null                       $isEnabled  Optional. True, if the connection is active
     */
    public static function make(
        ?string $id = null,
        ?UserInterface $user = null,
        ?int $userChatId = null,
        ?int $date = null,
        ?BusinessBotRightsInterface $rights = null,
        ?bool $isEnabled = null,
    ): BusinessConnectionInterface {
        return self::factory()->makeBusinessConnection(
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            user: $user ?? User::make(),
            userChatId: $userChatId ?? self::fake()->numberBetween(100000, 999999999),
            date: $date ?? self::fake()->unixTime(),
            rights: $rights,
            isEnabled: $isEnabled ?? self::fake()->boolean(),
        );
    }
}
