<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about a unique gift that was sent or received.
 */
interface UniqueGiftInfoInterface extends TypeInterface
{
    /** @var UniqueGiftInterface $gift Information about the gift */
    public UniqueGiftInterface $gift { set; get; }

    /** @var string $origin Origin of the gift. Currently, either “upgrade” for gifts upgraded from regular gifts, “transfer” for gifts transferred from other users or channels, “resale” for gifts bought from other users, “gifted_upgrade” for upgrades purchased after the gift was sent, or “offer” for gifts bought or sold through gift purchase offers */
    public string $origin { set; get; }

    /** @var string|null $lastResaleCurrency Optional. For gifts bought from other users, the currency in which the payment for the gift was done. Currently, one of “XTR” for Telegram Stars or “TON” for toncoins. */
    public ?string $lastResaleCurrency { set; get; }

    /** @var int|null $lastResaleAmount Optional. For gifts bought from other users, the price paid for the gift in either Telegram Stars or nanotoncoins */
    public ?int $lastResaleAmount { set; get; }

    /** @var string|null $ownedGiftId Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts */
    public ?string $ownedGiftId { set; get; }

    /** @var int|null $transferStarCount Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift */
    public ?int $transferStarCount { set; get; }

    /** @var int|null $nextTransferDate Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now */
    public ?int $nextTransferDate { set; get; }
}
