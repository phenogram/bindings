<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes an amount of Telegram Stars.
 */
class StarAmount implements Interfaces\StarAmountInterface
{
    /**
     * @param int      $amount         Integer amount of Telegram Stars, rounded to 0; can be negative
     * @param int|null $nanostarAmount Optional. The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999; can be negative if and only if amount is non-positive
     */
    public function __construct(
        public int $amount,
        public ?int $nanostarAmount = null,
    ) {
    }
}
