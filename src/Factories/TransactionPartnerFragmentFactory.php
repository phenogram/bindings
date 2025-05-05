<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\TransactionPartnerFragmentInterface;
use Phenogram\Bindings\Types\TransactionPartnerFragment;

class TransactionPartnerFragmentFactory extends AbstractFactory
{
    /**
     * Creates a new TransactionPartnerFragment instance with default fake data.
     *
     * @param string|null                                                               $type            Optional. Type of the transaction partner, always “fragment”
     * @param \Phenogram\Bindings\Types\Interfaces\RevenueWithdrawalStateInterface|null $withdrawalState Optional. Optional. State of the transaction if the transaction is outgoing
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RevenueWithdrawalStateInterface $withdrawalState = null,
    ): TransactionPartnerFragmentInterface {
        return self::factory()->makeTransactionPartnerFragment(
            type: $type ?? self::fake()->word(),
            withdrawalState: $withdrawalState,
        );
    }
}
