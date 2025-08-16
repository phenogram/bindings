<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MessageInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostPriceInterface;

/**
 * Describes a service message about the approval of a suggested post.
 */
class SuggestedPostApproved implements Interfaces\SuggestedPostApprovedInterface
{
    /**
     * @param int                              $sendDate             Date when the post will be published
     * @param MessageInterface|null            $suggestedPostMessage Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param SuggestedPostPriceInterface|null $price                Optional. Amount paid for the post
     */
    public function __construct(
        public int $sendDate,
        public ?MessageInterface $suggestedPostMessage = null,
        public ?SuggestedPostPriceInterface $price = null,
    ) {
    }
}
