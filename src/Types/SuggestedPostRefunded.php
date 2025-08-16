<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MessageInterface;

/**
 * Describes a service message about a payment refund for a suggested post.
 */
class SuggestedPostRefunded implements Interfaces\SuggestedPostRefundedInterface
{
    /**
     * @param string                $reason               Reason for the refund. Currently, one of “post_deleted” if the post was deleted within 24 hours of being posted or removed from scheduled messages without being posted, or “payment_refunded” if the payer refunded their payment.
     * @param MessageInterface|null $suggestedPostMessage Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     */
    public function __construct(
        public string $reason,
        public ?MessageInterface $suggestedPostMessage = null,
    ) {
    }
}
