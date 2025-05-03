<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents one shipping option.
 */
interface ShippingOptionInterface extends TypeInterface
{
    /** @var string $id Shipping option identifier */
    public string $id { set; get; }

    /** @var string $title Option title */
    public string $title { set; get; }

    /** @var array<LabeledPriceInterface> $prices List of price portions */
    public array $prices { set; get; }
}
