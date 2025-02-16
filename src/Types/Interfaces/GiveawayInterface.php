<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a message about a scheduled giveaway.
 */
interface GiveawayInterface extends TypeInterface
{
    /** @var array<ChatInterface> $chats The list of chats which the user must join to participate in the giveaway */
    public array $chats { set; }

    /** @var int $winnersSelectionDate Point in time (Unix timestamp) when winners of the giveaway will be selected */
    public int $winnersSelectionDate { set; }

    /** @var int $winnerCount The number of users which are supposed to be selected as winners of the giveaway */
    public int $winnerCount { set; }

    /** @var bool|null $onlyNewMembers Optional. True, if only users who join the chats after the giveaway started should be eligible to win */
    public ?bool $onlyNewMembers { set; }

    /** @var bool|null $hasPublicWinners Optional. True, if the list of giveaway winners will be visible to everyone */
    public ?bool $hasPublicWinners { set; }

    /** @var string|null $prizeDescription Optional. Description of additional giveaway prize */
    public ?string $prizeDescription { set; }

    /** @var array<string>|null $countryCodes Optional. A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which eligible users for the giveaway must come. If empty, then all users can participate in the giveaway. Users with a phone number that was bought on Fragment can always participate in giveaways. */
    public ?array $countryCodes { set; }

    /** @var int|null $prizeStarCount Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only */
    public ?int $prizeStarCount { set; }

    /** @var int|null $premiumSubscriptionMonthCount Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only */
    public ?int $premiumSubscriptionMonthCount { set; }
}
