<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\TransactionPartnerTelegramAdsInterface;
use Phenogram\Bindings\Types\TransactionPartnerTelegramAds;

class TransactionPartnerTelegramAdsFactory extends AbstractFactory
{
    /**
     * Creates a new TransactionPartnerTelegramAds instance with default fake data.
     *
     * @param string|null $type Optional. Type of the transaction partner, always “telegram_ads”
     */
    public static function make(?string $type = null): TransactionPartnerTelegramAdsInterface
    {
        return self::factory()->makeTransactionPartnerTelegramAds(
            type: $type ?? self::fake()->word(),
        );
    }
}
