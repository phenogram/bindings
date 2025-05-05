<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\OrderInfoInterface;
use Phenogram\Bindings\Types\Interfaces\SuccessfulPaymentInterface;
use Phenogram\Bindings\Types\SuccessfulPayment;

class SuccessfulPaymentFactory extends AbstractFactory
{
    /**
     * Creates a new SuccessfulPayment instance with default fake data.
     *
     * @param string|null             $currency                   Optional. Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars
     * @param int|null                $totalAmount                Optional. Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     * @param string|null             $invoicePayload             Optional. Bot-specified invoice payload
     * @param int|null                $subscriptionExpirationDate Optional. Optional. Expiration date of the subscription, in Unix time; for recurring payments only
     * @param bool|null               $isRecurring                Optional. Optional. True, if the payment is a recurring payment for a subscription
     * @param bool|null               $isFirstRecurring           Optional. Optional. True, if the payment is the first payment for a subscription
     * @param string|null             $shippingOptionId           Optional. Optional. Identifier of the shipping option chosen by the user
     * @param OrderInfoInterface|null $orderInfo                  Optional. Optional. Order information provided by the user
     * @param string|null             $telegramPaymentChargeId    Optional. Telegram payment identifier
     * @param string|null             $providerPaymentChargeId    Optional. Provider payment identifier
     */
    public static function make(
        ?string $currency = null,
        ?int $totalAmount = null,
        ?string $invoicePayload = null,
        ?int $subscriptionExpirationDate = null,
        ?bool $isRecurring = null,
        ?bool $isFirstRecurring = null,
        ?string $shippingOptionId = null,
        ?OrderInfoInterface $orderInfo = null,
        ?string $telegramPaymentChargeId = null,
        ?string $providerPaymentChargeId = null,
    ): SuccessfulPaymentInterface {
        return self::factory()->makeSuccessfulPayment(
            currency: $currency ?? self::fake()->text(50),
            totalAmount: $totalAmount ?? self::fake()->randomNumber(),
            invoicePayload: $invoicePayload ?? self::fake()->text(50),
            subscriptionExpirationDate: $subscriptionExpirationDate,
            isRecurring: $isRecurring,
            isFirstRecurring: $isFirstRecurring,
            shippingOptionId: $shippingOptionId,
            orderInfo: $orderInfo,
            telegramPaymentChargeId: $telegramPaymentChargeId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            providerPaymentChargeId: $providerPaymentChargeId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
        );
    }
}
