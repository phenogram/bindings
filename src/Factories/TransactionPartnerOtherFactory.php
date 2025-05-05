<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\TransactionPartnerOtherInterface;
use Phenogram\Bindings\Types\TransactionPartnerOther;

class TransactionPartnerOtherFactory extends AbstractFactory
{
    /**
     * Creates a new TransactionPartnerOther instance with default fake data.
     *
     * @param string|null $type Optional. Type of the transaction partner, always “other”
     */
    public static function make(?string $type = null): TransactionPartnerOtherInterface
    {
        return self::factory()->makeTransactionPartnerOther(
            type: $type ?? self::fake()->word(),
        );
    }
}
