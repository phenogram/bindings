<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Contains a list of Telegram Star transactions.
 */
interface StarTransactionsInterface extends TypeInterface
{
    /** @var array<StarTransactionInterface> $transactions The list of transactions */
    public array $transactions { set; get; }
}
