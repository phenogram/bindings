<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes an amount of Telegram Stars.
 */
interface StarAmountInterface extends TypeInterface
{
    /** @var int $amount Integer amount of Telegram Stars, rounded to 0; can be negative */
    public int $amount { set; }

    /** @var int|null $nanostarAmount Optional. The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999; can be negative if and only if amount is non-positive */
    public ?int $nanostarAmount { set; }
}
