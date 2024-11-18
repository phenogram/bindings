<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represent a list of gifts.
 */
class Gifts implements TypeInterface
{
    /**
     * @param array<Gift> $gifts The list of gifts
     */
    public function __construct(
        public array $gifts,
    ) {
    }
}
