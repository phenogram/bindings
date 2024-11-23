<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a withdrawal transaction with Fragment.
 */
interface TransactionPartnerFragmentInterface extends TypeInterface
{
	/** @var string $type Type of the transaction partner, always “fragment” */
	public string $type { set; get; }

	/** @var RevenueWithdrawalStateInterface|null $withdrawalState Optional. State of the transaction if the transaction is outgoing */
	public ?RevenueWithdrawalStateInterface $withdrawalState { set; get; }
}
