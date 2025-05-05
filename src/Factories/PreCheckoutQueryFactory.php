<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\OrderInfoInterface;
use Phenogram\Bindings\Types\Interfaces\PreCheckoutQueryInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\PreCheckoutQuery;

class PreCheckoutQueryFactory extends AbstractFactory
{
    /**
     * Creates a new PreCheckoutQuery instance with default fake data.
     *
     * @param string|null             $id               Optional. Unique query identifier
     * @param UserInterface|null      $from             Optional. User who sent the query
     * @param string|null             $currency         Optional. Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars
     * @param int|null                $totalAmount      Optional. Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     * @param string|null             $invoicePayload   Optional. Bot-specified invoice payload
     * @param string|null             $shippingOptionId Optional. Optional. Identifier of the shipping option chosen by the user
     * @param OrderInfoInterface|null $orderInfo        Optional. Optional. Order information provided by the user
     */
    public static function make(
        ?string $id = null,
        ?UserInterface $from = null,
        ?string $currency = null,
        ?int $totalAmount = null,
        ?string $invoicePayload = null,
        ?string $shippingOptionId = null,
        ?OrderInfoInterface $orderInfo = null,
    ): PreCheckoutQueryInterface {
        return self::factory()->makePreCheckoutQuery(
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            from: $from ?? User::make(),
            currency: $currency ?? self::fake()->text(50),
            totalAmount: $totalAmount ?? self::fake()->randomNumber(),
            invoicePayload: $invoicePayload ?? self::fake()->text(50),
            shippingOptionId: $shippingOptionId,
            orderInfo: $orderInfo,
        );
    }
}
