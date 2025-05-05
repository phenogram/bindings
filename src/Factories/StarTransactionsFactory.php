<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\StarTransactionFactory as StarTransaction;
use Phenogram\Bindings\Types\Interfaces\StarTransactionsInterface;
use Phenogram\Bindings\Types\StarTransactions;

class StarTransactionsFactory extends AbstractFactory
{
    /**
     * Creates a new StarTransactions instance with default fake data.
     *
     * @param array|null $transactions Optional. The list of transactions
     */
    public static function make(?array $transactions = null): StarTransactionsInterface
    {
        return self::factory()->makeStarTransactions(
            transactions: $transactions ?? array_map(fn () => StarTransaction::make(), range(0, self::fake()->numberBetween(0, 2))),
        );
    }
}
