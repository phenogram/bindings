<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about a regular gift that was sent or received.
 */
interface GiftInfoInterface extends TypeInterface
{
    /** @var GiftInterface $gift Information about the gift */
    public GiftInterface $gift { set; get; }

    /** @var string|null $ownedGiftId Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts */
    public ?string $ownedGiftId { set; get; }

    /** @var int|null $convertStarCount Optional. Number of Telegram Stars that can be claimed by the receiver by converting the gift; omitted if conversion to Telegram Stars is impossible */
    public ?int $convertStarCount { set; get; }

    /** @var int|null $prepaidUpgradeStarCount Optional. Number of Telegram Stars that were prepaid by the sender for the ability to upgrade the gift */
    public ?int $prepaidUpgradeStarCount { set; get; }

    /** @var bool|null $canBeUpgraded Optional. True, if the gift can be upgraded to a unique gift */
    public ?bool $canBeUpgraded { set; get; }

    /** @var string|null $text Optional. Text of the message that was added to the gift */
    public ?string $text { set; get; }

    /** @var array<MessageEntityInterface>|null $entities Optional. Special entities that appear in the text */
    public ?array $entities { set; get; }

    /** @var bool|null $isPrivate Optional. True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them */
    public ?bool $isPrivate { set; get; }
}
