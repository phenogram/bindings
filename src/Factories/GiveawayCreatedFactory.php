<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\GiveawayCreated;
use Phenogram\Bindings\Types\Interfaces\GiveawayCreatedInterface;

class GiveawayCreatedFactory extends AbstractFactory
{
    /**
     * Creates a new GiveawayCreated instance with default fake data.
     *
     * @param int|null $prizeStarCount Optional. Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     */
    public static function make(?int $prizeStarCount = null): GiveawayCreatedInterface
    {
        return self::factory()->makeGiveawayCreated(
            prizeStarCount: $prizeStarCount,
        );
    }
}
