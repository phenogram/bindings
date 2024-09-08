<?php

namespace Phenogram\Bindings\Types;

/**
 * This object contains information about a paid media purchase.
 */
class PaidMediaPurchased implements TypeInterface
{
    /**
     * @param User   $from             User who purchased the media
     * @param string $paidMediaPayload Bot-specified paid media payload
     */
    public function __construct(
        public User $from,
        public string $paidMediaPayload,
    ) {
    }
}
