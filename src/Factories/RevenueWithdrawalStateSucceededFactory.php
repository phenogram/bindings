<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RevenueWithdrawalStateSucceededInterface;
use Phenogram\Bindings\Types\RevenueWithdrawalStateSucceeded;

class RevenueWithdrawalStateSucceededFactory extends AbstractFactory
{
    /**
     * Creates a new RevenueWithdrawalStateSucceeded instance with default fake data.
     *
     * @param string|null $type Optional. Type of the state, always “succeeded”
     * @param int|null    $date Optional. Date the withdrawal was completed in Unix time
     * @param string|null $url  Optional. An HTTPS URL that can be used to see transaction details
     */
    public static function make(
        ?string $type = null,
        ?int $date = null,
        ?string $url = null,
    ): RevenueWithdrawalStateSucceededInterface {
        return self::factory()->makeRevenueWithdrawalStateSucceeded(
            type: $type ?? self::fake()->word(),
            date: $date ?? self::fake()->unixTime(),
            url: $url ?? self::fake()->url(),
        );
    }
}
