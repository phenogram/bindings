<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about a change in the price of paid messages within a chat.
 */
interface PaidMessagePriceChangedInterface extends TypeInterface
{
    /** @var int $paidMessageStarCount The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message */
    public int $paidMessageStarCount { set; get; }
}
