<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The boost was obtained by the creation of a Telegram Premium or a Telegram Star giveaway. This boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription for Telegram Premium giveaways and prize_star_count / 500 times for one year for Telegram Star giveaways.
 */
interface ChatBoostSourceGiveawayInterface extends TypeInterface
{
    /** @var string $source Source of the boost, always “giveaway” */
    public string $source { set; get; }

    /** @var int $giveawayMessageId Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet. */
    public int $giveawayMessageId { set; get; }

    /** @var UserInterface|null $user Optional. User that won the prize in the giveaway if any; for Telegram Premium giveaways only */
    public ?UserInterface $user { set; get; }

    /** @var int|null $prizeStarCount Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only */
    public ?int $prizeStarCount { set; get; }

    /** @var bool|null $isUnclaimed Optional. True, if the giveaway was completed, but there was no user to win the prize */
    public ?bool $isUnclaimed { set; get; }
}
