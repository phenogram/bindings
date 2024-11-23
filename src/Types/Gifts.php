<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\GiftInterface;

/**
 * This object represent a list of gifts.
 */
class Gifts implements Interfaces\GiftsInterface
{
    /**
     * @param array<GiftInterface> $gifts The list of gifts
     */
    public function __construct(
        public array $gifts,
    ) {
    }
}
