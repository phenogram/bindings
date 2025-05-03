<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a service message about the completion of a giveaway without public winners.
 */
interface GiveawayCompletedInterface extends TypeInterface
{
    /** @var int $winnerCount Number of winners in the giveaway */
    public int $winnerCount { set; get; }

    /** @var int|null $unclaimedPrizeCount Optional. Number of undistributed prizes */
    public ?int $unclaimedPrizeCount { set; get; }

    /** @var MessageInterface|null $giveawayMessage Optional. Message with the giveaway that was completed, if it wasn't deleted */
    public ?MessageInterface $giveawayMessage { set; get; }

    /** @var bool|null $isStarGiveaway Optional. True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway. */
    public ?bool $isStarGiveaway { set; get; }
}
