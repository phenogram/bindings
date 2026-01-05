<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UniqueGiftInterface;

/**
 * Describes a service message about a unique gift that was sent or received.
 */
class UniqueGiftInfo implements Interfaces\UniqueGiftInfoInterface
{
    /**
     * @param UniqueGiftInterface $gift               Information about the gift
     * @param string              $origin             Origin of the gift. Currently, either “upgrade” for gifts upgraded from regular gifts, “transfer” for gifts transferred from other users or channels, “resale” for gifts bought from other users, “gifted_upgrade” for upgrades purchased after the gift was sent, or “offer” for gifts bought or sold through gift purchase offers
     * @param string|null         $lastResaleCurrency Optional. For gifts bought from other users, the currency in which the payment for the gift was done. Currently, one of “XTR” for Telegram Stars or “TON” for toncoins.
     * @param int|null            $lastResaleAmount   Optional. For gifts bought from other users, the price paid for the gift in either Telegram Stars or nanotoncoins
     * @param string|null         $ownedGiftId        Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
     * @param int|null            $transferStarCount  Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
     * @param int|null            $nextTransferDate   Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now
     */
    public function __construct(
        public UniqueGiftInterface $gift,
        public string $origin,
        public ?string $lastResaleCurrency = null,
        public ?int $lastResaleAmount = null,
        public ?string $ownedGiftId = null,
        public ?int $transferStarCount = null,
        public ?int $nextTransferDate = null,
    ) {
    }
}
