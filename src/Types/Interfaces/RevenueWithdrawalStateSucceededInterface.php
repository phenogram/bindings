<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The withdrawal succeeded.
 */
interface RevenueWithdrawalStateSucceededInterface extends TypeInterface
{
	/** @var string $type Type of the state, always “succeeded” */
	public string $type { set; get; }

	/** @var int $date Date the withdrawal was completed in Unix time */
	public int $date { set; get; }

	/** @var string $url An HTTPS URL that can be used to see transaction details */
	public string $url { set; get; }
}
