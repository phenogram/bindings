<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\MessageFactory as Message;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostRefundedInterface;
use Phenogram\Bindings\Types\SuggestedPostRefunded;

class SuggestedPostRefundedFactory extends AbstractFactory
{
    /**
     * Creates a new SuggestedPostRefunded instance with default fake data.
     *
     * @param MessageInterface|null $suggestedPostMessage Optional. Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param string|null           $reason               Optional. Reason for the refund. Currently, one of “post_deleted” if the post was deleted within 24 hours of being posted or removed from scheduled messages without being posted, or “payment_refunded” if the payer refunded their payment.
     */
    public static function make(
        ?MessageInterface $suggestedPostMessage = null,
        ?string $reason = null,
    ): SuggestedPostRefundedInterface {
        return self::factory()->makeSuggestedPostRefunded(
            suggestedPostMessage: $suggestedPostMessage,
            reason: $reason ?? self::fake()->text(50),
        );
    }
}
