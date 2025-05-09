<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\OrderInfoInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * This object contains information about an incoming pre-checkout query.
 */
class PreCheckoutQuery implements Interfaces\PreCheckoutQueryInterface
{
    /**
     * @param string                  $id               Unique query identifier
     * @param UserInterface           $from             User who sent the query
     * @param string                  $currency         Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars
     * @param int                     $totalAmount      Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     * @param string                  $invoicePayload   Bot-specified invoice payload
     * @param string|null             $shippingOptionId Optional. Identifier of the shipping option chosen by the user
     * @param OrderInfoInterface|null $orderInfo        Optional. Order information provided by the user
     */
    public function __construct(
        public string $id,
        public UserInterface $from,
        public string $currency,
        public int $totalAmount,
        public string $invoicePayload,
        public ?string $shippingOptionId = null,
        public ?OrderInfoInterface $orderInfo = null,
    ) {
    }
}
