<?php

namespace Phenogram\Bindings\Types;

/**
 * This object describes the state of a revenue withdrawal operation. Currently, it can be one of.
 *
 * @see RevenueWithdrawalStatePending
 * @see RevenueWithdrawalStateSucceeded
 * @see RevenueWithdrawalStateFailed
 */
abstract class RevenueWithdrawalState implements Interfaces\RevenueWithdrawalStateInterface
{
}
