<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatBoostFactory as ChatBoost;
use Phenogram\Bindings\Types\Interfaces\UserChatBoostsInterface;
use Phenogram\Bindings\Types\UserChatBoosts;

class UserChatBoostsFactory extends AbstractFactory
{
    /**
     * Creates a new UserChatBoosts instance with default fake data.
     *
     * @param array|null $boosts Optional. The list of boosts added to the chat by the user
     */
    public static function make(?array $boosts = null): UserChatBoostsInterface
    {
        return self::factory()->makeUserChatBoosts(
            boosts: $boosts ?? array_map(fn () => ChatBoost::make(), range(0, self::fake()->numberBetween(0, 2))),
        );
    }
}
