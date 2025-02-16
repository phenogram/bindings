<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a message about the completion of a giveaway with public winners.
 */
interface GiveawayWinnersInterface extends TypeInterface
{
    /** @var ChatInterface $chat The chat that created the giveaway */
    public ChatInterface $chat { set; }

    /** @var int $giveawayMessageId Identifier of the message with the giveaway in the chat */
    public int $giveawayMessageId { set; }

    /** @var int $winnersSelectionDate Point in time (Unix timestamp) when winners of the giveaway were selected */
    public int $winnersSelectionDate { set; }

    /** @var int $winnerCount Total number of winners in the giveaway */
    public int $winnerCount { set; }

    /** @var array<UserInterface> $winners List of up to 100 winners of the giveaway */
    public array $winners { set; }

    /** @var int|null $additionalChatCount Optional. The number of other chats the user had to join in order to be eligible for the giveaway */
    public ?int $additionalChatCount { set; }

    /** @var int|null $prizeStarCount Optional. The number of Telegram Stars that were split between giveaway winners; for Telegram Star giveaways only */
    public ?int $prizeStarCount { set; }

    /** @var int|null $premiumSubscriptionMonthCount Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only */
    public ?int $premiumSubscriptionMonthCount { set; }

    /** @var int|null $unclaimedPrizeCount Optional. Number of undistributed prizes */
    public ?int $unclaimedPrizeCount { set; }

    /** @var bool|null $onlyNewMembers Optional. True, if only users who had joined the chats after the giveaway started were eligible to win */
    public ?bool $onlyNewMembers { set; }

    /** @var bool|null $wasRefunded Optional. True, if the giveaway was canceled because the payment for it was refunded */
    public ?bool $wasRefunded { set; }

    /** @var string|null $prizeDescription Optional. Description of additional giveaway prize */
    public ?string $prizeDescription { set; }
}
