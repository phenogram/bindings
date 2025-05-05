<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ShippingAddressFactory as ShippingAddress;
use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\ShippingAddressInterface;
use Phenogram\Bindings\Types\Interfaces\ShippingQueryInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\ShippingQuery;

class ShippingQueryFactory extends AbstractFactory
{
    /**
     * Creates a new ShippingQuery instance with default fake data.
     *
     * @param string|null                   $id              Optional. Unique query identifier
     * @param UserInterface|null            $from            Optional. User who sent the query
     * @param string|null                   $invoicePayload  Optional. Bot-specified invoice payload
     * @param ShippingAddressInterface|null $shippingAddress Optional. User specified shipping address
     */
    public static function make(
        ?string $id = null,
        ?UserInterface $from = null,
        ?string $invoicePayload = null,
        ?ShippingAddressInterface $shippingAddress = null,
    ): ShippingQueryInterface {
        return self::factory()->makeShippingQuery(
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            from: $from ?? User::make(),
            invoicePayload: $invoicePayload ?? self::fake()->text(50),
            shippingAddress: $shippingAddress ?? ShippingAddress::make(),
        );
    }
}
