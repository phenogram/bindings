<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RevenueWithdrawalStateInterface;

/**
 * Describes a withdrawal transaction with Fragment.
 */
class TransactionPartnerFragment extends TransactionPartner implements Interfaces\TransactionPartnerFragmentInterface
{
    /**
     * @param string                               $type            Type of the transaction partner, always “fragment”
     * @param RevenueWithdrawalStateInterface|null $withdrawalState Optional. State of the transaction if the transaction is outgoing
     */
    public function __construct(
        public string $type,
        public ?RevenueWithdrawalStateInterface $withdrawalState = null,
    ) {
    }
}
