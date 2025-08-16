<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MessageInterface;
use Phenogram\Bindings\Types\Interfaces\StarAmountInterface;

/**
 * Describes a service message about a successful payment for a suggested post.
 */
class SuggestedPostPaid implements Interfaces\SuggestedPostPaidInterface
{
    /**
     * @param string                   $currency             Currency in which the payment was made. Currently, one of “XTR” for Telegram Stars or “TON” for toncoins
     * @param MessageInterface|null    $suggestedPostMessage Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param int|null                 $amount               Optional. The amount of the currency that was received by the channel in nanotoncoins; for payments in toncoins only
     * @param StarAmountInterface|null $starAmount           Optional. The amount of Telegram Stars that was received by the channel; for payments in Telegram Stars only
     */
    public function __construct(
        public string $currency,
        public ?MessageInterface $suggestedPostMessage = null,
        public ?int $amount = null,
        public ?StarAmountInterface $starAmount = null,
    ) {
    }
}
