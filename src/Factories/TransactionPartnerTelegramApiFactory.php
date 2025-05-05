<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\TransactionPartnerTelegramApiInterface;
use Phenogram\Bindings\Types\TransactionPartnerTelegramApi;

class TransactionPartnerTelegramApiFactory extends AbstractFactory
{
    /**
     * Creates a new TransactionPartnerTelegramApi instance with default fake data.
     *
     * @param string|null $type         Optional. Type of the transaction partner, always “telegram_api”
     * @param int|null    $requestCount Optional. The number of successful requests that exceeded regular limits and were therefore billed
     */
    public static function make(?string $type = null, ?int $requestCount = null): TransactionPartnerTelegramApiInterface
    {
        return self::factory()->makeTransactionPartnerTelegramApi(
            type: $type ?? self::fake()->word(),
            requestCount: $requestCount ?? self::fake()->randomNumber(),
        );
    }
}
