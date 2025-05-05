<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PaidMessagePriceChangedInterface;
use Phenogram\Bindings\Types\PaidMessagePriceChanged;

class PaidMessagePriceChangedFactory extends AbstractFactory
{
    /**
     * Creates a new PaidMessagePriceChanged instance with default fake data.
     *
     * @param int|null $paidMessageStarCount Optional. The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message
     */
    public static function make(?int $paidMessageStarCount = null): PaidMessagePriceChangedInterface
    {
        return self::factory()->makePaidMessagePriceChanged(
            paidMessageStarCount: $paidMessageStarCount ?? self::fake()->randomNumber(),
        );
    }
}
