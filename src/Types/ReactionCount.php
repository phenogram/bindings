<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ReactionTypeInterface;

/**
 * Represents a reaction added to a message along with the number of times it was added.
 */
class ReactionCount implements Interfaces\ReactionCountInterface
{
    /**
     * @param ReactionTypeInterface $type       Type of the reaction
     * @param int                   $totalCount Number of times the reaction was added
     */
    public function __construct(
        public ReactionTypeInterface $type,
        public int $totalCount,
    ) {
    }
}
