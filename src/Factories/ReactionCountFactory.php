<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\ReactionCountInterface;
use Phenogram\Bindings\Types\ReactionCount;

class ReactionCountFactory extends AbstractFactory
{
    /**
     * Creates a new ReactionCount instance with default fake data.
     *
     * @param \Phenogram\Bindings\Types\Interfaces\ReactionTypeInterface|null $type       Optional. Type of the reaction
     * @param int|null                                                        $totalCount Optional. Number of times the reaction was added
     */
    public static function make(
        ?\Phenogram\Bindings\Types\Interfaces\ReactionTypeInterface $type = null,
        ?int $totalCount = null,
    ): ReactionCountInterface {
        return self::factory()->makeReactionCount(
            type: $type ?? '[Abstract type: ReactionType]',
            totalCount: $totalCount ?? self::fake()->randomNumber(),
        );
    }
}
