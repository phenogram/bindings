<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\ChatBoostSourceGiveaway;
use Phenogram\Bindings\Types\Interfaces\ChatBoostSourceGiveawayInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class ChatBoostSourceGiveawayFactory extends AbstractFactory
{
    /**
     * Creates a new ChatBoostSourceGiveaway instance with default fake data.
     *
     * @param string|null        $source            Optional. Source of the boost, always “giveaway”
     * @param int|null           $giveawayMessageId Optional. Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet.
     * @param UserInterface|null $user              Optional. Optional. User that won the prize in the giveaway if any; for Telegram Premium giveaways only
     * @param int|null           $prizeStarCount    Optional. Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     * @param bool|null          $isUnclaimed       Optional. Optional. True, if the giveaway was completed, but there was no user to win the prize
     */
    public static function make(
        ?string $source = null,
        ?int $giveawayMessageId = null,
        ?UserInterface $user = null,
        ?int $prizeStarCount = null,
        ?bool $isUnclaimed = null,
    ): ChatBoostSourceGiveawayInterface {
        return self::factory()->makeChatBoostSourceGiveaway(
            source: $source ?? self::fake()->text(50),
            giveawayMessageId: $giveawayMessageId ?? self::fake()->numberBetween(100000, 999999999),
            user: $user,
            prizeStarCount: $prizeStarCount,
            isUnclaimed: $isUnclaimed,
        );
    }
}
