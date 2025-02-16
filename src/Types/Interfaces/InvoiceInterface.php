<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains basic information about an invoice.
 */
interface InvoiceInterface extends TypeInterface
{
    /** @var string $title Product name */
    public string $title { set; }

    /** @var string $description Product description */
    public string $description { set; }

    /** @var string $startParameter Unique bot deep-linking parameter that can be used to generate this invoice */
    public string $startParameter { set; }

    /** @var string $currency Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars */
    public string $currency { set; }

    /** @var int $totalAmount Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). */
    public int $totalAmount { set; }
}
