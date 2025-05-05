<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\LabeledPriceInterface;
use Phenogram\Bindings\Types\LabeledPrice;

class LabeledPriceFactory extends AbstractFactory
{
    /**
     * Creates a new LabeledPrice instance with default fake data.
     *
     * @param string|null $label  Optional. Portion label
     * @param int|null    $amount Optional. Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     */
    public static function make(?string $label = null, ?int $amount = null): LabeledPriceInterface
    {
        return self::factory()->makeLabeledPrice(
            label: $label ?? self::fake()->text(50),
            amount: $amount ?? self::fake()->randomNumber(),
        );
    }
}
