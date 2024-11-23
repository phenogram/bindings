<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes a transaction with an unknown source or recipient.
 */
class TransactionPartnerOther extends TransactionPartner implements Interfaces\TransactionPartnerOtherInterface
{
    /**
     * @param string $type Type of the transaction partner, always “other”
     */
    public function __construct(
        public string $type,
    ) {
    }
}
