<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\SuggestedPostPriceInterface;
use Phenogram\Bindings\Types\SuggestedPostPrice;

class SuggestedPostPriceFactory extends AbstractFactory
{
    /**
     * Creates a new SuggestedPostPrice instance with default fake data.
     *
     * @param string|null $currency Optional. Currency in which the post will be paid. Currently, must be one of “XTR” for Telegram Stars or “TON” for toncoins
     * @param int|null    $amount   Optional. The amount of the currency that will be paid for the post in the smallest units of the currency, i.e. Telegram Stars or nanotoncoins. Currently, price in Telegram Stars must be between 5 and 100000, and price in nanotoncoins must be between 10000000 and 10000000000000.
     */
    public static function make(?string $currency = null, ?int $amount = null): SuggestedPostPriceInterface
    {
        return self::factory()->makeSuggestedPostPrice(
            currency: $currency ?? self::fake()->text(50),
            amount: $amount ?? self::fake()->randomNumber(),
        );
    }
}
