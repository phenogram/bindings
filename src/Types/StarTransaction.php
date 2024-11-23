<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\TransactionPartnerInterface;

/**
 * Describes a Telegram Star transaction.
 */
class StarTransaction implements Interfaces\StarTransactionInterface
{
    /**
     * @param string                           $id       Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund transactions. Coincides with SuccessfulPayment.telegram_payment_charge_id for successful incoming payments from users.
     * @param int                              $amount   Number of Telegram Stars transferred by the transaction
     * @param int                              $date     Date the transaction was created in Unix time
     * @param TransactionPartnerInterface|null $source   Optional. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a failed withdrawal). Only for incoming transactions
     * @param TransactionPartnerInterface|null $receiver Optional. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal). Only for outgoing transactions
     */
    public function __construct(
        public string $id,
        public int $amount,
        public int $date,
        public ?TransactionPartnerInterface $source = null,
        public ?TransactionPartnerInterface $receiver = null,
    ) {
    }
}
