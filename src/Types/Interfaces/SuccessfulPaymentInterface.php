<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains basic information about a successful payment. Note that if the buyer initiates a chargeback with the relevant payment provider following this transaction, the funds may be debited from your balance. This is outside of Telegram's control.
 */
interface SuccessfulPaymentInterface extends TypeInterface
{
    /** @var string $currency Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars */
    public string $currency { set; get; }

    /** @var int $totalAmount Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). */
    public int $totalAmount { set; get; }

    /** @var string $invoicePayload Bot-specified invoice payload */
    public string $invoicePayload { set; get; }

    /** @var int|null $subscriptionExpirationDate Optional. Expiration date of the subscription, in Unix time; for recurring payments only */
    public ?int $subscriptionExpirationDate { set; get; }

    /** @var bool|null $isRecurring Optional. True, if the payment is a recurring payment for a subscription */
    public ?bool $isRecurring { set; get; }

    /** @var bool|null $isFirstRecurring Optional. True, if the payment is the first payment for a subscription */
    public ?bool $isFirstRecurring { set; get; }

    /** @var string|null $shippingOptionId Optional. Identifier of the shipping option chosen by the user */
    public ?string $shippingOptionId { set; get; }

    /** @var OrderInfoInterface|null $orderInfo Optional. Order information provided by the user */
    public ?OrderInfoInterface $orderInfo { set; get; }

    /** @var string $telegramPaymentChargeId Telegram payment identifier */
    public string $telegramPaymentChargeId { set; get; }

    /** @var string $providerPaymentChargeId Provider payment identifier */
    public string $providerPaymentChargeId { set; get; }
}
