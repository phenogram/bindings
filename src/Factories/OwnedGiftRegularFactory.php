<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\GiftFactory as Gift;
use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\GiftInterface;
use Phenogram\Bindings\Types\Interfaces\OwnedGiftRegularInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\OwnedGiftRegular;

class OwnedGiftRegularFactory extends AbstractFactory
{
    /**
     * Creates a new OwnedGiftRegular instance with default fake data.
     *
     * @param string|null        $type                    Optional. Type of the gift, always “regular”
     * @param GiftInterface|null $gift                    Optional. Information about the regular gift
     * @param string|null        $ownedGiftId             Optional. Optional. Unique identifier of the gift for the bot; for gifts received on behalf of business accounts only
     * @param UserInterface|null $senderUser              Optional. Optional. Sender of the gift if it is a known user
     * @param int|null           $sendDate                Optional. Date the gift was sent in Unix time
     * @param string|null        $text                    Optional. Optional. Text of the message that was added to the gift
     * @param array|null         $entities                Optional. Optional. Special entities that appear in the text
     * @param bool|null          $isPrivate               Optional. Optional. True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
     * @param bool|null          $isSaved                 Optional. Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
     * @param bool|null          $canBeUpgraded           Optional. Optional. True, if the gift can be upgraded to a unique gift; for gifts received on behalf of business accounts only
     * @param bool|null          $wasRefunded             Optional. Optional. True, if the gift was refunded and isn't available anymore
     * @param int|null           $convertStarCount        Optional. Optional. Number of Telegram Stars that can be claimed by the receiver instead of the gift; omitted if the gift cannot be converted to Telegram Stars
     * @param int|null           $prepaidUpgradeStarCount Optional. Optional. Number of Telegram Stars that were paid by the sender for the ability to upgrade the gift
     */
    public static function make(
        ?string $type = null,
        ?GiftInterface $gift = null,
        ?string $ownedGiftId = null,
        ?UserInterface $senderUser = null,
        ?int $sendDate = null,
        ?string $text = null,
        ?array $entities = null,
        ?bool $isPrivate = null,
        ?bool $isSaved = null,
        ?bool $canBeUpgraded = null,
        ?bool $wasRefunded = null,
        ?int $convertStarCount = null,
        ?int $prepaidUpgradeStarCount = null,
    ): OwnedGiftRegularInterface {
        return self::factory()->makeOwnedGiftRegular(
            type: $type ?? self::fake()->word(),
            gift: $gift ?? Gift::make(),
            ownedGiftId: $ownedGiftId,
            senderUser: $senderUser,
            sendDate: $sendDate ?? self::fake()->unixTime(),
            text: $text,
            entities: $entities,
            isPrivate: $isPrivate,
            isSaved: $isSaved,
            canBeUpgraded: $canBeUpgraded,
            wasRefunded: $wasRefunded,
            convertStarCount: $convertStarCount,
            prepaidUpgradeStarCount: $prepaidUpgradeStarCount,
        );
    }
}
