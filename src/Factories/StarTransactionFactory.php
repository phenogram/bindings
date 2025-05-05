<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\StarTransactionInterface;
use Phenogram\Bindings\Types\StarTransaction;

class StarTransactionFactory extends AbstractFactory
{
    /**
     * Creates a new StarTransaction instance with default fake data.
     *
     * @param string|null                                                           $id             Optional. Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund transactions. Coincides with SuccessfulPayment.telegram_payment_charge_id for successful incoming payments from users.
     * @param int|null                                                              $amount         Optional. Integer amount of Telegram Stars transferred by the transaction
     * @param int|null                                                              $nanostarAmount Optional. Optional. The number of 1/1000000000 shares of Telegram Stars transferred by the transaction; from 0 to 999999999
     * @param int|null                                                              $date           Optional. Date the transaction was created in Unix time
     * @param \Phenogram\Bindings\Types\Interfaces\TransactionPartnerInterface|null $source         Optional. Optional. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a failed withdrawal). Only for incoming transactions
     * @param \Phenogram\Bindings\Types\Interfaces\TransactionPartnerInterface|null $receiver       Optional. Optional. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal). Only for outgoing transactions
     */
    public static function make(
        ?string $id = null,
        ?int $amount = null,
        ?int $nanostarAmount = null,
        ?int $date = null,
        ?\Phenogram\Bindings\Types\Interfaces\TransactionPartnerInterface $source = null,
        ?\Phenogram\Bindings\Types\Interfaces\TransactionPartnerInterface $receiver = null,
    ): StarTransactionInterface {
        return self::factory()->makeStarTransaction(
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            amount: $amount ?? self::fake()->randomNumber(),
            nanostarAmount: $nanostarAmount,
            date: $date ?? self::fake()->unixTime(),
            source: $source,
            receiver: $receiver,
        );
    }
}
