<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Desribes price of a suggested post.
 */
interface SuggestedPostPriceInterface extends TypeInterface
{
    /** @var string $currency Currency in which the post will be paid. Currently, must be one of “XTR” for Telegram Stars or “TON” for toncoins */
    public string $currency { set; get; }

    /** @var int $amount The amount of the currency that will be paid for the post in the smallest units of the currency, i.e. Telegram Stars or nanotoncoins. Currently, price in Telegram Stars must be between 5 and 100000, and price in nanotoncoins must be between 10000000 and 10000000000000. */
    public int $amount { set; get; }
}
