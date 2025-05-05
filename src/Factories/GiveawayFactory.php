<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Types\Giveaway;
use Phenogram\Bindings\Types\Interfaces\GiveawayInterface;

class GiveawayFactory extends AbstractFactory
{
    /**
     * Creates a new Giveaway instance with default fake data.
     *
     * @param array|null  $chats                         Optional. The list of chats which the user must join to participate in the giveaway
     * @param int|null    $winnersSelectionDate          Optional. Point in time (Unix timestamp) when winners of the giveaway will be selected
     * @param int|null    $winnerCount                   Optional. The number of users which are supposed to be selected as winners of the giveaway
     * @param bool|null   $onlyNewMembers                Optional. Optional. True, if only users who join the chats after the giveaway started should be eligible to win
     * @param bool|null   $hasPublicWinners              Optional. Optional. True, if the list of giveaway winners will be visible to everyone
     * @param string|null $prizeDescription              Optional. Optional. Description of additional giveaway prize
     * @param array|null  $countryCodes                  Optional. Optional. A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which eligible users for the giveaway must come. If empty, then all users can participate in the giveaway. Users with a phone number that was bought on Fragment can always participate in giveaways.
     * @param int|null    $prizeStarCount                Optional. Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     * @param int|null    $premiumSubscriptionMonthCount Optional. Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
     */
    public static function make(
        ?array $chats = null,
        ?int $winnersSelectionDate = null,
        ?int $winnerCount = null,
        ?bool $onlyNewMembers = null,
        ?bool $hasPublicWinners = null,
        ?string $prizeDescription = null,
        ?array $countryCodes = null,
        ?int $prizeStarCount = null,
        ?int $premiumSubscriptionMonthCount = null,
    ): GiveawayInterface {
        return self::factory()->makeGiveaway(
            chats: $chats ?? array_map(fn () => Chat::make(), range(0, self::fake()->numberBetween(0, 2))),
            winnersSelectionDate: $winnersSelectionDate ?? self::fake()->unixTime(),
            winnerCount: $winnerCount ?? self::fake()->randomNumber(),
            onlyNewMembers: $onlyNewMembers,
            hasPublicWinners: $hasPublicWinners,
            prizeDescription: $prizeDescription,
            countryCodes: $countryCodes,
            prizeStarCount: $prizeStarCount,
            premiumSubscriptionMonthCount: $premiumSubscriptionMonthCount,
        );
    }
}
