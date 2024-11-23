<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ShippingAddressInterface;

/**
 * This object represents information about an order.
 */
class OrderInfo implements Interfaces\OrderInfoInterface
{
    /**
     * @param string|null                   $name            Optional. User name
     * @param string|null                   $phoneNumber     Optional. User's phone number
     * @param string|null                   $email           Optional. User email
     * @param ShippingAddressInterface|null $shippingAddress Optional. User shipping address
     */
    public function __construct(
        public ?string $name = null,
        public ?string $phoneNumber = null,
        public ?string $email = null,
        public ?ShippingAddressInterface $shippingAddress = null,
    ) {
    }
}
