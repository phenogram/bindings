<?php

namespace Phenogram\Bindings\Types;

/**
 * The reaction is paid.
 */
class ReactionTypePaid extends ReactionType implements Interfaces\ReactionTypePaidInterface
{
    /**
     * @param string $type Type of the reaction, always “paid”
     */
    public function __construct(
        public string $type,
    ) {
    }
}
