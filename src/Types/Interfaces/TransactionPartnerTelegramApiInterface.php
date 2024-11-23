<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a transaction with payment for paid broadcasting.
 */
interface TransactionPartnerTelegramApiInterface extends TypeInterface
{
	/** @var string $type Type of the transaction partner, always “telegram_api” */
	public string $type { set; get; }

	/** @var int $requestCount The number of successful requests that exceeded regular limits and were therefore billed */
	public int $requestCount { set; get; }
}
