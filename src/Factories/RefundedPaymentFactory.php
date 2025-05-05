<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RefundedPaymentInterface;
use Phenogram\Bindings\Types\RefundedPayment;

class RefundedPaymentFactory extends AbstractFactory
{
    /**
     * Creates a new RefundedPayment instance with default fake data.
     *
     * @param string|null $currency                Optional. Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars. Currently, always “XTR”
     * @param int|null    $totalAmount             Optional. Total refunded price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45, total_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     * @param string|null $invoicePayload          Optional. Bot-specified invoice payload
     * @param string|null $telegramPaymentChargeId Optional. Telegram payment identifier
     * @param string|null $providerPaymentChargeId Optional. Optional. Provider payment identifier
     */
    public static function make(
        ?string $currency = null,
        ?int $totalAmount = null,
        ?string $invoicePayload = null,
        ?string $telegramPaymentChargeId = null,
        ?string $providerPaymentChargeId = null,
    ): RefundedPaymentInterface {
        return self::factory()->makeRefundedPayment(
            currency: $currency ?? self::fake()->text(50),
            totalAmount: $totalAmount ?? self::fake()->randomNumber(),
            invoicePayload: $invoicePayload ?? self::fake()->text(50),
            telegramPaymentChargeId: $telegramPaymentChargeId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            providerPaymentChargeId: $providerPaymentChargeId,
        );
    }
}
