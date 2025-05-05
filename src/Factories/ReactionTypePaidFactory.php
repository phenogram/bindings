<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\ReactionTypePaidInterface;
use Phenogram\Bindings\Types\ReactionTypePaid;

class ReactionTypePaidFactory extends AbstractFactory
{
    /**
     * Creates a new ReactionTypePaid instance with default fake data.
     *
     * @param string|null $type Optional. Type of the reaction, always “paid”
     */
    public static function make(?string $type = null): ReactionTypePaidInterface
    {
        return self::factory()->makeReactionTypePaid(
            type: $type ?? self::fake()->word(),
        );
    }
}
