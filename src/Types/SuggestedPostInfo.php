<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\SuggestedPostPriceInterface;

/**
 * Contains information about a suggested post.
 */
class SuggestedPostInfo implements Interfaces\SuggestedPostInfoInterface
{
    /**
     * @param string                           $state    State of the suggested post. Currently, it can be one of “pending”, “approved”, “declined”.
     * @param SuggestedPostPriceInterface|null $price    Optional. Proposed price of the post. If the field is omitted, then the post is unpaid.
     * @param int|null                         $sendDate Optional. Proposed send date of the post. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user or administrator who approves it.
     */
    public function __construct(
        public string $state,
        public ?SuggestedPostPriceInterface $price = null,
        public ?int $sendDate = null,
    ) {
    }
}
