<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\SuggestedPostParametersInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostPriceInterface;
use Phenogram\Bindings\Types\SuggestedPostParameters;

class SuggestedPostParametersFactory extends AbstractFactory
{
    /**
     * Creates a new SuggestedPostParameters instance with default fake data.
     *
     * @param SuggestedPostPriceInterface|null $price    Optional. Optional. Proposed price for the post. If the field is omitted, then the post is unpaid.
     * @param int|null                         $sendDate Optional. Optional. Proposed send date of the post. If specified, then the date must be between 300 second and 2678400 seconds (30 days) in the future. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user who approves it.
     */
    public static function make(
        ?SuggestedPostPriceInterface $price = null,
        ?int $sendDate = null,
    ): SuggestedPostParametersInterface {
        return self::factory()->makeSuggestedPostParameters(
            price: $price,
            sendDate: $sendDate,
        );
    }
}
