<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The withdrawal is in progress.
 */
interface RevenueWithdrawalStatePendingInterface extends TypeInterface
{
    /** @var string $type Type of the state, always “pending” */
    public string $type { set; get; }
}
