<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\SharedUserFactory as SharedUser;
use Phenogram\Bindings\Types\Interfaces\UsersSharedInterface;
use Phenogram\Bindings\Types\UsersShared;

class UsersSharedFactory extends AbstractFactory
{
    /**
     * Creates a new UsersShared instance with default fake data.
     *
     * @param int|null   $requestId Optional. Identifier of the request
     * @param array|null $users     Optional. Information about users shared with the bot.
     */
    public static function make(?int $requestId = null, ?array $users = null): UsersSharedInterface
    {
        return self::factory()->makeUsersShared(
            requestId: $requestId ?? self::fake()->numberBetween(100000, 999999999),
            users: $users ?? array_map(fn () => SharedUser::make(), range(0, self::fake()->numberBetween(0, 2))),
        );
    }
}
