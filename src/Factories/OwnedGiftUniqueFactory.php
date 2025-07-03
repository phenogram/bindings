<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UniqueGiftFactory as UniqueGift;
use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\OwnedGiftUniqueInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\OwnedGiftUnique;

class OwnedGiftUniqueFactory extends AbstractFactory
{
    /**
     * Creates a new OwnedGiftUnique instance with default fake data.
     *
     * @param string|null              $type              Optional. Type of the gift, always “unique”
     * @param UniqueGiftInterface|null $gift              Optional. Information about the unique gift
     * @param string|null              $ownedGiftId       Optional. Optional. Unique identifier of the received gift for the bot; for gifts received on behalf of business accounts only
     * @param UserInterface|null       $senderUser        Optional. Optional. Sender of the gift if it is a known user
     * @param int|null                 $sendDate          Optional. Date the gift was sent in Unix time
     * @param bool|null                $isSaved           Optional. Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
     * @param bool|null                $canBeTransferred  Optional. Optional. True, if the gift can be transferred to another owner; for gifts received on behalf of business accounts only
     * @param int|null                 $transferStarCount Optional. Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
     * @param int|null                 $nextTransferDate  Optional. Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now
     */
    public static function make(
        ?string $type = null,
        ?UniqueGiftInterface $gift = null,
        ?string $ownedGiftId = null,
        ?UserInterface $senderUser = null,
        ?int $sendDate = null,
        ?bool $isSaved = null,
        ?bool $canBeTransferred = null,
        ?int $transferStarCount = null,
        ?int $nextTransferDate = null,
    ): OwnedGiftUniqueInterface {
        return self::factory()->makeOwnedGiftUnique(
            type: $type ?? self::fake()->word(),
            gift: $gift ?? UniqueGift::make(),
            ownedGiftId: $ownedGiftId,
            senderUser: $senderUser,
            sendDate: $sendDate ?? self::fake()->unixTime(),
            isSaved: $isSaved,
            canBeTransferred: $canBeTransferred,
            transferStarCount: $transferStarCount,
            nextTransferDate: $nextTransferDate,
        );
    }
}
