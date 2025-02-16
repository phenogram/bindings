<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The withdrawal failed and the transaction was refunded.
 */
interface RevenueWithdrawalStateFailedInterface extends TypeInterface
{
    /** @var string $type Type of the state, always “failed” */
    public string $type { set; }
}
