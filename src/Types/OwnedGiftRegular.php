<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\GiftInterface;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Describes a regular gift owned by a user or a chat.
 */
class OwnedGiftRegular extends OwnedGift implements Interfaces\OwnedGiftRegularInterface
{
    /**
     * @param string                             $type                    Type of the gift, always “regular”
     * @param GiftInterface                      $gift                    Information about the regular gift
     * @param int                                $sendDate                Date the gift was sent in Unix time
     * @param string|null                        $ownedGiftId             Optional. Unique identifier of the gift for the bot; for gifts received on behalf of business accounts only
     * @param UserInterface|null                 $senderUser              Optional. Sender of the gift if it is a known user
     * @param string|null                        $text                    Optional. Text of the message that was added to the gift
     * @param array<MessageEntityInterface>|null $entities                Optional. Special entities that appear in the text
     * @param bool|null                          $isPrivate               Optional. True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
     * @param bool|null                          $isSaved                 Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
     * @param bool|null                          $canBeUpgraded           Optional. True, if the gift can be upgraded to a unique gift; for gifts received on behalf of business accounts only
     * @param bool|null                          $wasRefunded             Optional. True, if the gift was refunded and isn't available anymore
     * @param int|null                           $convertStarCount        Optional. Number of Telegram Stars that can be claimed by the receiver instead of the gift; omitted if the gift cannot be converted to Telegram Stars
     * @param int|null                           $prepaidUpgradeStarCount Optional. Number of Telegram Stars that were paid by the sender for the ability to upgrade the gift
     */
    public function __construct(
        public string $type,
        public GiftInterface $gift,
        public int $sendDate,
        public ?string $ownedGiftId = null,
        public ?UserInterface $senderUser = null,
        public ?string $text = null,
        public ?array $entities = null,
        public ?bool $isPrivate = null,
        public ?bool $isSaved = null,
        public ?bool $canBeUpgraded = null,
        public ?bool $wasRefunded = null,
        public ?int $convertStarCount = null,
        public ?int $prepaidUpgradeStarCount = null,
    ) {
    }
}
