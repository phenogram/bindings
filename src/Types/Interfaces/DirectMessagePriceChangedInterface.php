<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about a change in the price of direct messages sent to a channel chat.
 */
interface DirectMessagePriceChangedInterface extends TypeInterface
{
    /** @var bool $areDirectMessagesEnabled True, if direct messages are enabled for the channel chat; false otherwise */
    public bool $areDirectMessagesEnabled { set; get; }

    /** @var int|null $directMessageStarCount Optional. The new number of Telegram Stars that must be paid by users for each direct message sent to the channel. Does not apply to users who have been exempted by administrators. Defaults to 0. */
    public ?int $directMessageStarCount { set; get; }
}
