<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UniqueGiftFactory as UniqueGift;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftInfoInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftInterface;
use Phenogram\Bindings\Types\UniqueGiftInfo;

class UniqueGiftInfoFactory extends AbstractFactory
{
    /**
     * Creates a new UniqueGiftInfo instance with default fake data.
     *
     * @param UniqueGiftInterface|null $gift                Optional. Information about the gift
     * @param string|null              $origin              Optional. Origin of the gift. Currently, either “upgrade” for gifts upgraded from regular gifts, “transfer” for gifts transferred from other users or channels, or “resale” for gifts bought from other users
     * @param int|null                 $lastResaleStarCount Optional. Optional. For gifts bought from other users, the price paid for the gift
     * @param string|null              $ownedGiftId         Optional. Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
     * @param int|null                 $transferStarCount   Optional. Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
     * @param int|null                 $nextTransferDate    Optional. Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now
     */
    public static function make(
        ?UniqueGiftInterface $gift = null,
        ?string $origin = null,
        ?int $lastResaleStarCount = null,
        ?string $ownedGiftId = null,
        ?int $transferStarCount = null,
        ?int $nextTransferDate = null,
    ): UniqueGiftInfoInterface {
        return self::factory()->makeUniqueGiftInfo(
            gift: $gift ?? UniqueGift::make(),
            origin: $origin ?? self::fake()->text(50),
            lastResaleStarCount: $lastResaleStarCount,
            ownedGiftId: $ownedGiftId,
            transferStarCount: $transferStarCount,
            nextTransferDate: $nextTransferDate,
        );
    }
}
