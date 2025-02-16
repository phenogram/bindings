<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains basic information about a refunded payment.
 */
interface RefundedPaymentInterface extends TypeInterface
{
    /** @var string $currency Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars. Currently, always “XTR” */
    public string $currency { set; }

    /** @var int $totalAmount Total refunded price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45, total_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). */
    public int $totalAmount { set; }

    /** @var string $invoicePayload Bot-specified invoice payload */
    public string $invoicePayload { set; }

    /** @var string $telegramPaymentChargeId Telegram payment identifier */
    public string $telegramPaymentChargeId { set; }

    /** @var string|null $providerPaymentChargeId Optional. Provider payment identifier */
    public ?string $providerPaymentChargeId { set; }
}
