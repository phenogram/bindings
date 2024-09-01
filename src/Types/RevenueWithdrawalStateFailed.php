<?php

namespace Phenogram\Bindings\Types;

/**
 * The withdrawal failed and the transaction was refunded.
 */
class RevenueWithdrawalStateFailed extends RevenueWithdrawalState
{
    /**
     * @param string $type Type of the state, always “failed”
     */
    public function __construct(
        public string $type,
    ) {
    }
}
