<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\OrderInfoInterface;
use Phenogram\Bindings\Types\Interfaces\ShippingAddressInterface;
use Phenogram\Bindings\Types\OrderInfo;

class OrderInfoFactory extends AbstractFactory
{
    /**
     * Creates a new OrderInfo instance with default fake data.
     *
     * @param string|null                   $name            Optional. Optional. User name
     * @param string|null                   $phoneNumber     Optional. Optional. User's phone number
     * @param string|null                   $email           Optional. Optional. User email
     * @param ShippingAddressInterface|null $shippingAddress Optional. Optional. User shipping address
     */
    public static function make(
        ?string $name = null,
        ?string $phoneNumber = null,
        ?string $email = null,
        ?ShippingAddressInterface $shippingAddress = null,
    ): OrderInfoInterface {
        return self::factory()->makeOrderInfo(
            name: $name,
            phoneNumber: $phoneNumber,
            email: $email,
            shippingAddress: $shippingAddress,
        );
    }
}
