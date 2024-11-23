<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * The boost was obtained by the creation of a Telegram Premium or a Telegram Star giveaway. This boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription for Telegram Premium giveaways and prize_star_count / 500 times for one year for Telegram Star giveaways.
 */
class ChatBoostSourceGiveaway extends ChatBoostSource implements Interfaces\ChatBoostSourceGiveawayInterface
{
    /**
     * @param string             $source            Source of the boost, always “giveaway”
     * @param int                $giveawayMessageId Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet.
     * @param UserInterface|null $user              Optional. User that won the prize in the giveaway if any; for Telegram Premium giveaways only
     * @param int|null           $prizeStarCount    Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     * @param bool|null          $isUnclaimed       Optional. True, if the giveaway was completed, but there was no user to win the prize
     */
    public function __construct(
        public string $source,
        public int $giveawayMessageId,
        public ?UserInterface $user = null,
        public ?int $prizeStarCount = null,
        public ?bool $isUnclaimed = null,
    ) {
    }
}
