<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about a unique gift that was sent or received.
 */
interface UniqueGiftInfoInterface extends TypeInterface
{
    /** @var UniqueGiftInterface $gift Information about the gift */
    public UniqueGiftInterface $gift { set; }

    /** @var string $origin Origin of the gift. Currently, either “upgrade” or “transfer” */
    public string $origin { set; }

    /** @var string|null $ownedGiftId Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts */
    public ?string $ownedGiftId { set; }

    /** @var int|null $transferStarCount Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift */
    public ?int $transferStarCount { set; }
}
