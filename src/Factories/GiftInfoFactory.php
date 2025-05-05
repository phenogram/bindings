<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\GiftFactory as Gift;
use Phenogram\Bindings\Types\GiftInfo;
use Phenogram\Bindings\Types\Interfaces\GiftInfoInterface;
use Phenogram\Bindings\Types\Interfaces\GiftInterface;

class GiftInfoFactory extends AbstractFactory
{
    /**
     * Creates a new GiftInfo instance with default fake data.
     *
     * @param GiftInterface|null $gift                    Optional. Information about the gift
     * @param string|null        $ownedGiftId             Optional. Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
     * @param int|null           $convertStarCount        Optional. Optional. Number of Telegram Stars that can be claimed by the receiver by converting the gift; omitted if conversion to Telegram Stars is impossible
     * @param int|null           $prepaidUpgradeStarCount Optional. Optional. Number of Telegram Stars that were prepaid by the sender for the ability to upgrade the gift
     * @param bool|null          $canBeUpgraded           Optional. Optional. True, if the gift can be upgraded to a unique gift
     * @param string|null        $text                    Optional. Optional. Text of the message that was added to the gift
     * @param array|null         $entities                Optional. Optional. Special entities that appear in the text
     * @param bool|null          $isPrivate               Optional. Optional. True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
     */
    public static function make(
        ?GiftInterface $gift = null,
        ?string $ownedGiftId = null,
        ?int $convertStarCount = null,
        ?int $prepaidUpgradeStarCount = null,
        ?bool $canBeUpgraded = null,
        ?string $text = null,
        ?array $entities = null,
        ?bool $isPrivate = null,
    ): GiftInfoInterface {
        return self::factory()->makeGiftInfo(
            gift: $gift ?? Gift::make(),
            ownedGiftId: $ownedGiftId,
            convertStarCount: $convertStarCount,
            prepaidUpgradeStarCount: $prepaidUpgradeStarCount,
            canBeUpgraded: $canBeUpgraded,
            text: $text,
            entities: $entities,
            isPrivate: $isPrivate,
        );
    }
}
