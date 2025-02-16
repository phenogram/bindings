<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a withdrawal transaction to the Telegram Ads platform.
 */
interface TransactionPartnerTelegramAdsInterface extends TypeInterface
{
    /** @var string $type Type of the transaction partner, always “telegram_ads” */
    public string $type { set; }
}
