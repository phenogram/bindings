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
     * @param UniqueGiftInterface|null $gift              Optional. Information about the gift
     * @param string|null              $origin            Optional. Origin of the gift. Currently, either “upgrade” or “transfer”
     * @param string|null              $ownedGiftId       Optional. Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
     * @param int|null                 $transferStarCount Optional. Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
     */
    public static function make(
        ?UniqueGiftInterface $gift = null,
        ?string $origin = null,
        ?string $ownedGiftId = null,
        ?int $transferStarCount = null,
    ): UniqueGiftInfoInterface {
        return self::factory()->makeUniqueGiftInfo(
            gift: $gift ?? UniqueGift::make(),
            origin: $origin ?? self::fake()->text(50),
            ownedGiftId: $ownedGiftId,
            transferStarCount: $transferStarCount,
        );
    }
}
