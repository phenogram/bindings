<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\StarTransactionInterface;

/**
 * Contains a list of Telegram Star transactions.
 */
class StarTransactions implements Interfaces\StarTransactionsInterface
{
    /**
     * @param array<StarTransactionInterface> $transactions The list of transactions
     */
    public function __construct(
        public array $transactions,
    ) {
    }
}
