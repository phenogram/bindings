<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a unique gift received and owned by a user or a chat.
 */
interface OwnedGiftUniqueInterface extends TypeInterface
{
    /** @var string $type Type of the gift, always “unique” */
    public string $type { set; }

    /** @var UniqueGiftInterface $gift Information about the unique gift */
    public UniqueGiftInterface $gift { set; }

    /** @var string|null $ownedGiftId Optional. Unique identifier of the received gift for the bot; for gifts received on behalf of business accounts only */
    public ?string $ownedGiftId { set; }

    /** @var UserInterface|null $senderUser Optional. Sender of the gift if it is a known user */
    public ?UserInterface $senderUser { set; }

    /** @var int $sendDate Date the gift was sent in Unix time */
    public int $sendDate { set; }

    /** @var bool|null $isSaved Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only */
    public ?bool $isSaved { set; }

    /** @var bool|null $canBeTransferred Optional. True, if the gift can be transferred to another owner; for gifts received on behalf of business accounts only */
    public ?bool $canBeTransferred { set; }

    /** @var int|null $transferStarCount Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift */
    public ?int $transferStarCount { set; }
}
