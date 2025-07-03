<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UniqueGiftInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Describes a unique gift received and owned by a user or a chat.
 */
class OwnedGiftUnique extends OwnedGift implements Interfaces\OwnedGiftUniqueInterface
{
    /**
     * @param string              $type              Type of the gift, always “unique”
     * @param UniqueGiftInterface $gift              Information about the unique gift
     * @param int                 $sendDate          Date the gift was sent in Unix time
     * @param string|null         $ownedGiftId       Optional. Unique identifier of the received gift for the bot; for gifts received on behalf of business accounts only
     * @param UserInterface|null  $senderUser        Optional. Sender of the gift if it is a known user
     * @param bool|null           $isSaved           Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
     * @param bool|null           $canBeTransferred  Optional. True, if the gift can be transferred to another owner; for gifts received on behalf of business accounts only
     * @param int|null            $transferStarCount Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
     * @param int|null            $nextTransferDate  Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now
     */
    public function __construct(
        public string $type,
        public UniqueGiftInterface $gift,
        public int $sendDate,
        public ?string $ownedGiftId = null,
        public ?UserInterface $senderUser = null,
        public ?bool $isSaved = null,
        public ?bool $canBeTransferred = null,
        public ?int $transferStarCount = null,
        public ?int $nextTransferDate = null,
    ) {
    }
}
