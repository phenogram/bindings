<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a transaction with an unknown source or recipient.
 */
interface TransactionPartnerOtherInterface extends TypeInterface
{
    /** @var string $type Type of the transaction partner, always “other” */
    public string $type { set; }
}
