<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\InvoiceInterface;
use Phenogram\Bindings\Types\Invoice;

class InvoiceFactory extends AbstractFactory
{
    /**
     * Creates a new Invoice instance with default fake data.
     *
     * @param string|null $title          Optional. Product name
     * @param string|null $description    Optional. Product description
     * @param string|null $startParameter Optional. Unique bot deep-linking parameter that can be used to generate this invoice
     * @param string|null $currency       Optional. Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars
     * @param int|null    $totalAmount    Optional. Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     */
    public static function make(
        ?string $title = null,
        ?string $description = null,
        ?string $startParameter = null,
        ?string $currency = null,
        ?int $totalAmount = null,
    ): InvoiceInterface {
        return self::factory()->makeInvoice(
            title: $title ?? self::fake()->sentence(3),
            description: $description ?? self::fake()->sentence(),
            startParameter: $startParameter ?? self::fake()->text(50),
            currency: $currency ?? self::fake()->text(50),
            totalAmount: $totalAmount ?? self::fake()->randomNumber(),
        );
    }
}
