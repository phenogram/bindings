<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MessageInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostPriceInterface;

/**
 * Describes a service message about the failed approval of a suggested post. Currently, only caused by insufficient user funds at the time of approval.
 */
class SuggestedPostApprovalFailed implements Interfaces\SuggestedPostApprovalFailedInterface
{
    /**
     * @param SuggestedPostPriceInterface $price                Expected price of the post
     * @param MessageInterface|null       $suggestedPostMessage Optional. Message containing the suggested post whose approval has failed. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     */
    public function __construct(
        public SuggestedPostPriceInterface $price,
        public ?MessageInterface $suggestedPostMessage = null,
    ) {
    }
}
