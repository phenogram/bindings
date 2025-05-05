<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\LabeledPriceFactory as LabeledPrice;
use Phenogram\Bindings\Types\Interfaces\ShippingOptionInterface;
use Phenogram\Bindings\Types\ShippingOption;

class ShippingOptionFactory extends AbstractFactory
{
    /**
     * Creates a new ShippingOption instance with default fake data.
     *
     * @param string|null $id     Optional. Shipping option identifier
     * @param string|null $title  Optional. Option title
     * @param array|null  $prices Optional. List of price portions
     */
    public static function make(
        ?string $id = null,
        ?string $title = null,
        ?array $prices = null,
    ): ShippingOptionInterface {
        return self::factory()->makeShippingOption(
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            title: $title ?? self::fake()->sentence(3),
            prices: $prices ?? array_map(fn () => LabeledPrice::make(), range(0, self::fake()->numberBetween(0, 2))),
        );
    }
}
