<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes the state of a revenue withdrawal operation. Currently, it can be one of.
 *
 * @see RevenueWithdrawalStatePendingInterface
 * @see RevenueWithdrawalStateSucceededInterface
 * @see RevenueWithdrawalStateFailedInterface
 */
interface RevenueWithdrawalStateInterface extends TypeInterface
{
}
