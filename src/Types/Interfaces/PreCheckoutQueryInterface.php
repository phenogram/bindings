<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about an incoming pre-checkout query.
 */
interface PreCheckoutQueryInterface extends TypeInterface
{
    /** @var string $id Unique query identifier */
    public string $id { set; get; }

    /** @var UserInterface $from User who sent the query */
    public UserInterface $from { set; get; }

    /** @var string $currency Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars */
    public string $currency { set; get; }

    /** @var int $totalAmount Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). */
    public int $totalAmount { set; get; }

    /** @var string $invoicePayload Bot-specified invoice payload */
    public string $invoicePayload { set; get; }

    /** @var string|null $shippingOptionId Optional. Identifier of the shipping option chosen by the user */
    public ?string $shippingOptionId { set; get; }

    /** @var OrderInfoInterface|null $orderInfo Optional. Order information provided by the user */
    public ?OrderInfoInterface $orderInfo { set; get; }
}
