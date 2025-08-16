<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\SuggestedPostInfoInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostPriceInterface;
use Phenogram\Bindings\Types\SuggestedPostInfo;

class SuggestedPostInfoFactory extends AbstractFactory
{
    /**
     * Creates a new SuggestedPostInfo instance with default fake data.
     *
     * @param string|null                      $state    Optional. State of the suggested post. Currently, it can be one of “pending”, “approved”, “declined”.
     * @param SuggestedPostPriceInterface|null $price    Optional. Optional. Proposed price of the post. If the field is omitted, then the post is unpaid.
     * @param int|null                         $sendDate Optional. Optional. Proposed send date of the post. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user or administrator who approves it.
     */
    public static function make(
        ?string $state = null,
        ?SuggestedPostPriceInterface $price = null,
        ?int $sendDate = null,
    ): SuggestedPostInfoInterface {
        return self::factory()->makeSuggestedPostInfo(
            state: $state ?? self::fake()->text(50),
            price: $price,
            sendDate: $sendDate,
        );
    }
}
