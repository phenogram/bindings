<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\OrderInfoInterface;

/**
 * This object contains basic information about a successful payment. Note that if the buyer initiates a chargeback with the relevant payment provider following this transaction, the funds may be debited from your balance. This is outside of Telegram's control.
 */
class SuccessfulPayment implements Interfaces\SuccessfulPaymentInterface
{
    /**
     * @param string                  $currency                   Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars
     * @param int                     $totalAmount                Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     * @param string                  $invoicePayload             Bot-specified invoice payload
     * @param string                  $telegramPaymentChargeId    Telegram payment identifier
     * @param string                  $providerPaymentChargeId    Provider payment identifier
     * @param int|null                $subscriptionExpirationDate Optional. Expiration date of the subscription, in Unix time; for recurring payments only
     * @param bool|null               $isRecurring                Optional. True, if the payment is a recurring payment for a subscription
     * @param bool|null               $isFirstRecurring           Optional. True, if the payment is the first payment for a subscription
     * @param string|null             $shippingOptionId           Optional. Identifier of the shipping option chosen by the user
     * @param OrderInfoInterface|null $orderInfo                  Optional. Order information provided by the user
     */
    public function __construct(
        public string $currency,
        public int $totalAmount,
        public string $invoicePayload,
        public string $telegramPaymentChargeId,
        public string $providerPaymentChargeId,
        public ?int $subscriptionExpirationDate = null,
        public ?bool $isRecurring = null,
        public ?bool $isFirstRecurring = null,
        public ?string $shippingOptionId = null,
        public ?OrderInfoInterface $orderInfo = null,
    ) {
    }
}
