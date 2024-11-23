<?php

namespace Phenogram\Bindings\Types;

/**
 * The withdrawal is in progress.
 */
class RevenueWithdrawalStatePending extends RevenueWithdrawalState implements Interfaces\RevenueWithdrawalStatePendingInterface
{
    /**
     * @param string $type Type of the state, always “pending”
     */
    public function __construct(
        public string $type,
    ) {
    }
}
