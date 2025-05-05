<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RevenueWithdrawalStatePendingInterface;
use Phenogram\Bindings\Types\RevenueWithdrawalStatePending;

class RevenueWithdrawalStatePendingFactory extends AbstractFactory
{
    /**
     * Creates a new RevenueWithdrawalStatePending instance with default fake data.
     *
     * @param string|null $type Optional. Type of the state, always “pending”
     */
    public static function make(?string $type = null): RevenueWithdrawalStatePendingInterface
    {
        return self::factory()->makeRevenueWithdrawalStatePending(
            type: $type ?? self::fake()->word(),
        );
    }
}
