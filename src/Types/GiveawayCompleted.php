<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MessageInterface;

/**
 * This object represents a service message about the completion of a giveaway without public winners.
 */
class GiveawayCompleted implements Interfaces\GiveawayCompletedInterface
{
    /**
     * @param int                   $winnerCount         Number of winners in the giveaway
     * @param int|null              $unclaimedPrizeCount Optional. Number of undistributed prizes
     * @param MessageInterface|null $giveawayMessage     Optional. Message with the giveaway that was completed, if it wasn't deleted
     * @param bool|null             $isStarGiveaway      Optional. True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway.
     */
    public function __construct(
        public int $winnerCount,
        public ?int $unclaimedPrizeCount = null,
        public ?MessageInterface $giveawayMessage = null,
        public ?bool $isStarGiveaway = null,
    ) {
    }
}
