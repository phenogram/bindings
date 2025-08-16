<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\SuggestedPostPriceInterface;

/**
 * Contains parameters of a post that is being suggested by the bot.
 */
class SuggestedPostParameters implements Interfaces\SuggestedPostParametersInterface
{
    /**
     * @param SuggestedPostPriceInterface|null $price    Optional. Proposed price for the post. If the field is omitted, then the post is unpaid.
     * @param int|null                         $sendDate Optional. Proposed send date of the post. If specified, then the date must be between 300 second and 2678400 seconds (30 days) in the future. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user who approves it.
     */
    public function __construct(
        public ?SuggestedPostPriceInterface $price = null,
        public ?int $sendDate = null,
    ) {
    }
}
