<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\GiveawayWinners;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayWinnersInterface;

class GiveawayWinnersFactory extends AbstractFactory
{
    /**
     * Creates a new GiveawayWinners instance with default fake data.
     *
     * @param ChatInterface|null $chat                          Optional. The chat that created the giveaway
     * @param int|null           $giveawayMessageId             Optional. Identifier of the message with the giveaway in the chat
     * @param int|null           $winnersSelectionDate          Optional. Point in time (Unix timestamp) when winners of the giveaway were selected
     * @param int|null           $winnerCount                   Optional. Total number of winners in the giveaway
     * @param array|null         $winners                       Optional. List of up to 100 winners of the giveaway
     * @param int|null           $additionalChatCount           Optional. Optional. The number of other chats the user had to join in order to be eligible for the giveaway
     * @param int|null           $prizeStarCount                Optional. Optional. The number of Telegram Stars that were split between giveaway winners; for Telegram Star giveaways only
     * @param int|null           $premiumSubscriptionMonthCount Optional. Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
     * @param int|null           $unclaimedPrizeCount           Optional. Optional. Number of undistributed prizes
     * @param bool|null          $onlyNewMembers                Optional. Optional. True, if only users who had joined the chats after the giveaway started were eligible to win
     * @param bool|null          $wasRefunded                   Optional. Optional. True, if the giveaway was canceled because the payment for it was refunded
     * @param string|null        $prizeDescription              Optional. Optional. Description of additional giveaway prize
     */
    public static function make(
        ?ChatInterface $chat = null,
        ?int $giveawayMessageId = null,
        ?int $winnersSelectionDate = null,
        ?int $winnerCount = null,
        ?array $winners = null,
        ?int $additionalChatCount = null,
        ?int $prizeStarCount = null,
        ?int $premiumSubscriptionMonthCount = null,
        ?int $unclaimedPrizeCount = null,
        ?bool $onlyNewMembers = null,
        ?bool $wasRefunded = null,
        ?string $prizeDescription = null,
    ): GiveawayWinnersInterface {
        return self::factory()->makeGiveawayWinners(
            chat: $chat ?? Chat::make(),
            giveawayMessageId: $giveawayMessageId ?? self::fake()->numberBetween(100000, 999999999),
            winnersSelectionDate: $winnersSelectionDate ?? self::fake()->unixTime(),
            winnerCount: $winnerCount ?? self::fake()->randomNumber(),
            winners: $winners ?? array_map(fn () => User::make(), range(0, self::fake()->numberBetween(0, 2))),
            additionalChatCount: $additionalChatCount,
            prizeStarCount: $prizeStarCount,
            premiumSubscriptionMonthCount: $premiumSubscriptionMonthCount,
            unclaimedPrizeCount: $unclaimedPrizeCount,
            onlyNewMembers: $onlyNewMembers,
            wasRefunded: $wasRefunded,
            prizeDescription: $prizeDescription,
        );
    }
}
