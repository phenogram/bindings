<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UniqueGiftInterface;

/**
 * Describes a service message about a unique gift that was sent or received.
 */
class UniqueGiftInfo implements Interfaces\UniqueGiftInfoInterface
{
    /**
     * @param UniqueGiftInterface $gift              Information about the gift
     * @param string              $origin            Origin of the gift. Currently, either “upgrade” or “transfer”
     * @param string|null         $ownedGiftId       Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
     * @param int|null            $transferStarCount Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
     */
    public function __construct(
        public UniqueGiftInterface $gift,
        public string $origin,
        public ?string $ownedGiftId = null,
        public ?int $transferStarCount = null,
    ) {
    }
}
