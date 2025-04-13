<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes a service message about a change in the price of paid messages within a chat.
 */
class PaidMessagePriceChanged implements Interfaces\PaidMessagePriceChangedInterface
{
    /**
     * @param int $paidMessageStarCount The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message
     */
    public function __construct(
        public int $paidMessageStarCount,
    ) {
    }
}
