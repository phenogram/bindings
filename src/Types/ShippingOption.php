<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\LabeledPriceInterface;

/**
 * This object represents one shipping option.
 */
class ShippingOption implements Interfaces\ShippingOptionInterface
{
    /**
     * @param string                       $id     Shipping option identifier
     * @param string                       $title  Option title
     * @param array<LabeledPriceInterface> $prices List of price portions
     */
    public function __construct(
        public string $id,
        public string $title,
        public array $prices,
    ) {
    }
}
