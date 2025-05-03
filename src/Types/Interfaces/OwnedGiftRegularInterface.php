<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a regular gift owned by a user or a chat.
 */
interface OwnedGiftRegularInterface extends TypeInterface
{
    /** @var string $type Type of the gift, always “regular” */
    public string $type { set; get; }

    /** @var GiftInterface $gift Information about the regular gift */
    public GiftInterface $gift { set; get; }

    /** @var string|null $ownedGiftId Optional. Unique identifier of the gift for the bot; for gifts received on behalf of business accounts only */
    public ?string $ownedGiftId { set; get; }

    /** @var UserInterface|null $senderUser Optional. Sender of the gift if it is a known user */
    public ?UserInterface $senderUser { set; get; }

    /** @var int $sendDate Date the gift was sent in Unix time */
    public int $sendDate { set; get; }

    /** @var string|null $text Optional. Text of the message that was added to the gift */
    public ?string $text { set; get; }

    /** @var array<MessageEntityInterface>|null $entities Optional. Special entities that appear in the text */
    public ?array $entities { set; get; }

    /** @var bool|null $isPrivate Optional. True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them */
    public ?bool $isPrivate { set; get; }

    /** @var bool|null $isSaved Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only */
    public ?bool $isSaved { set; get; }

    /** @var bool|null $canBeUpgraded Optional. True, if the gift can be upgraded to a unique gift; for gifts received on behalf of business accounts only */
    public ?bool $canBeUpgraded { set; get; }

    /** @var bool|null $wasRefunded Optional. True, if the gift was refunded and isn't available anymore */
    public ?bool $wasRefunded { set; get; }

    /** @var int|null $convertStarCount Optional. Number of Telegram Stars that can be claimed by the receiver instead of the gift; omitted if the gift cannot be converted to Telegram Stars */
    public ?int $convertStarCount { set; get; }

    /** @var int|null $prepaidUpgradeStarCount Optional. Number of Telegram Stars that were paid by the sender for the ability to upgrade the gift */
    public ?int $prepaidUpgradeStarCount { set; get; }
}
