<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a service message about the creation of a scheduled giveaway.
 */
interface GiveawayCreatedInterface extends TypeInterface
{
    /** @var int|null $prizeStarCount Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only */
    public ?int $prizeStarCount { set; get; }
}
