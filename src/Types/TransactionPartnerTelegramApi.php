<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes a transaction with payment for paid broadcasting.
 */
class TransactionPartnerTelegramApi extends TransactionPartner
{
    /**
     * @param string $type         Type of the transaction partner, always “telegram_api”
     * @param int    $requestCount The number of successful requests that exceeded regular limits and were therefore billed
     */
    public function __construct(
        public string $type,
        public int $requestCount,
    ) {
    }
}
