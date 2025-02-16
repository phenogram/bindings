<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about a paid media purchase.
 */
interface PaidMediaPurchasedInterface extends TypeInterface
{
    /** @var UserInterface $from User who purchased the media */
    public UserInterface $from { set; }

    /** @var string $paidMediaPayload Bot-specified paid media payload */
    public string $paidMediaPayload { set; }
}
