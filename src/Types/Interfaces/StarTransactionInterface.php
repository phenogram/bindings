<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a Telegram Star transaction.
 */
interface StarTransactionInterface extends TypeInterface
{
	/** @var string $id Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund transactions. Coincides with SuccessfulPayment.telegram_payment_charge_id for successful incoming payments from users. */
	public string $id { set; get; }

	/** @var int $amount Integer amount of Telegram Stars transferred by the transaction */
	public int $amount { set; get; }

	/** @var int|null $nanostarAmount Optional. The number of 1/1000000000 shares of Telegram Stars transferred by the transaction; from 0 to 999999999 */
	public ?int $nanostarAmount { set; get; }

	/** @var int $date Date the transaction was created in Unix time */
	public int $date { set; get; }

	/** @var TransactionPartnerInterface|null $source Optional. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a failed withdrawal). Only for incoming transactions */
	public ?TransactionPartnerInterface $source { set; get; }

	/** @var TransactionPartnerInterface|null $receiver Optional. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal). Only for outgoing transactions */
	public ?TransactionPartnerInterface $receiver { set; get; }
}
