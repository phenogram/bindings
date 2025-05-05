<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\MessageFactory as Message;
use Phenogram\Bindings\Types\GiveawayCompleted;
use Phenogram\Bindings\Types\Interfaces\GiveawayCompletedInterface;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;

class GiveawayCompletedFactory extends AbstractFactory
{
    /**
     * Creates a new GiveawayCompleted instance with default fake data.
     *
     * @param int|null              $winnerCount         Optional. Number of winners in the giveaway
     * @param int|null              $unclaimedPrizeCount Optional. Optional. Number of undistributed prizes
     * @param MessageInterface|null $giveawayMessage     Optional. Optional. Message with the giveaway that was completed, if it wasn't deleted
     * @param bool|null             $isStarGiveaway      Optional. Optional. True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway.
     */
    public static function make(
        ?int $winnerCount = null,
        ?int $unclaimedPrizeCount = null,
        ?MessageInterface $giveawayMessage = null,
        ?bool $isStarGiveaway = null,
    ): GiveawayCompletedInterface {
        return self::factory()->makeGiveawayCompleted(
            winnerCount: $winnerCount ?? self::fake()->randomNumber(),
            unclaimedPrizeCount: $unclaimedPrizeCount,
            giveawayMessage: $giveawayMessage,
            isStarGiveaway: $isStarGiveaway,
        );
    }
}
