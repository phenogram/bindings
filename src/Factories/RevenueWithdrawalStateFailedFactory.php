<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RevenueWithdrawalStateFailedInterface;
use Phenogram\Bindings\Types\RevenueWithdrawalStateFailed;

class RevenueWithdrawalStateFailedFactory extends AbstractFactory
{
    /**
     * Creates a new RevenueWithdrawalStateFailed instance with default fake data.
     *
     * @param string|null $type Optional. Type of the state, always “failed”
     */
    public static function make(?string $type = null): RevenueWithdrawalStateFailedInterface
    {
        return self::factory()->makeRevenueWithdrawalStateFailed(
            type: $type ?? self::fake()->word(),
        );
    }
}
