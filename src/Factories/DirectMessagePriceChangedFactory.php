<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\DirectMessagePriceChanged;
use Phenogram\Bindings\Types\Interfaces\DirectMessagePriceChangedInterface;

class DirectMessagePriceChangedFactory extends AbstractFactory
{
    /**
     * Creates a new DirectMessagePriceChanged instance with default fake data.
     *
     * @param bool|null $areDirectMessagesEnabled Optional. True, if direct messages are enabled for the channel chat; false otherwise
     * @param int|null  $directMessageStarCount   Optional. Optional. The new number of Telegram Stars that must be paid by users for each direct message sent to the channel. Does not apply to users who have been exempted by administrators. Defaults to 0.
     */
    public static function make(
        ?bool $areDirectMessagesEnabled = null,
        ?int $directMessageStarCount = null,
    ): DirectMessagePriceChangedInterface {
        return self::factory()->makeDirectMessagePriceChanged(
            areDirectMessagesEnabled: $areDirectMessagesEnabled ?? self::fake()->boolean(),
            directMessageStarCount: $directMessageStarCount,
        );
    }
}
