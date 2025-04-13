<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\GiftInterface;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * Describes a service message about a regular gift that was sent or received.
 */
class GiftInfo implements Interfaces\GiftInfoInterface
{
    /**
     * @param GiftInterface                      $gift                    Information about the gift
     * @param string|null                        $ownedGiftId             Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
     * @param int|null                           $convertStarCount        Optional. Number of Telegram Stars that can be claimed by the receiver by converting the gift; omitted if conversion to Telegram Stars is impossible
     * @param int|null                           $prepaidUpgradeStarCount Optional. Number of Telegram Stars that were prepaid by the sender for the ability to upgrade the gift
     * @param bool|null                          $canBeUpgraded           Optional. True, if the gift can be upgraded to a unique gift
     * @param string|null                        $text                    Optional. Text of the message that was added to the gift
     * @param array<MessageEntityInterface>|null $entities                Optional. Special entities that appear in the text
     * @param bool|null                          $isPrivate               Optional. True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
     */
    public function __construct(
        public GiftInterface $gift,
        public ?string $ownedGiftId = null,
        public ?int $convertStarCount = null,
        public ?int $prepaidUpgradeStarCount = null,
        public ?bool $canBeUpgraded = null,
        public ?string $text = null,
        public ?array $entities = null,
        public ?bool $isPrivate = null,
    ) {
    }
}
