<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about a successful payment for a suggested post.
 */
interface SuggestedPostPaidInterface extends TypeInterface
{
    /** @var MessageInterface|null $suggestedPostMessage Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply. */
    public ?MessageInterface $suggestedPostMessage { set; get; }

    /** @var string $currency Currency in which the payment was made. Currently, one of “XTR” for Telegram Stars or “TON” for toncoins */
    public string $currency { set; get; }

    /** @var int|null $amount Optional. The amount of the currency that was received by the channel in nanotoncoins; for payments in toncoins only */
    public ?int $amount { set; get; }

    /** @var StarAmountInterface|null $starAmount Optional. The amount of Telegram Stars that was received by the channel; for payments in Telegram Stars only */
    public ?StarAmountInterface $starAmount { set; get; }
}
