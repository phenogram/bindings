<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * This object contains information about a paid media purchase.
 */
class PaidMediaPurchased implements Interfaces\PaidMediaPurchasedInterface
{
    /**
     * @param UserInterface $from             User who purchased the media
     * @param string        $paidMediaPayload Bot-specified paid media payload
     */
    public function __construct(
        public UserInterface $from,
        public string $paidMediaPayload,
    ) {
    }
}
