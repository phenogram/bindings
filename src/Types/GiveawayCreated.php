<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents a service message about the creation of a scheduled giveaway.
 */
class GiveawayCreated implements TypeInterface
{
    /**
     * @param int|null $prizeStarCount Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     */
    public function __construct(
        public ?int $prizeStarCount = null,
    ) {
    }
}
