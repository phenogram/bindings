<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\StarAmountInterface;
use Phenogram\Bindings\Types\StarAmount;

class StarAmountFactory extends AbstractFactory
{
    /**
     * Creates a new StarAmount instance with default fake data.
     *
     * @param int|null $amount         Optional. Integer amount of Telegram Stars, rounded to 0; can be negative
     * @param int|null $nanostarAmount Optional. Optional. The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999; can be negative if and only if amount is non-positive
     */
    public static function make(?int $amount = null, ?int $nanostarAmount = null): StarAmountInterface
    {
        return self::factory()->makeStarAmount(
            amount: $amount ?? self::fake()->randomNumber(),
            nanostarAmount: $nanostarAmount,
        );
    }
}
