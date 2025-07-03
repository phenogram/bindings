<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes a service message about a change in the price of direct messages sent to a channel chat.
 */
class DirectMessagePriceChanged implements Interfaces\DirectMessagePriceChangedInterface
{
    /**
     * @param bool     $areDirectMessagesEnabled True, if direct messages are enabled for the channel chat; false otherwise
     * @param int|null $directMessageStarCount   Optional. The new number of Telegram Stars that must be paid by users for each direct message sent to the channel. Does not apply to users who have been exempted by administrators. Defaults to 0.
     */
    public function __construct(
        public bool $areDirectMessagesEnabled,
        public ?int $directMessageStarCount = null,
    ) {
    }
}
