<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\ChatBoostAdded;
use Phenogram\Bindings\Types\Interfaces\ChatBoostAddedInterface;

class ChatBoostAddedFactory extends AbstractFactory
{
    /**
     * Creates a new ChatBoostAdded instance with default fake data.
     *
     * @param int|null $boostCount Optional. Number of boosts added by the user
     */
    public static function make(?int $boostCount = null): ChatBoostAddedInterface
    {
        return self::factory()->makeChatBoostAdded(
            boostCount: $boostCount ?? self::fake()->randomNumber(),
        );
    }
}
