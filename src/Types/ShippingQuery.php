<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ShippingAddressInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * This object contains information about an incoming shipping query.
 */
class ShippingQuery implements Interfaces\ShippingQueryInterface
{
    /**
     * @param string                   $id              Unique query identifier
     * @param UserInterface            $from            User who sent the query
     * @param string                   $invoicePayload  Bot-specified invoice payload
     * @param ShippingAddressInterface $shippingAddress User specified shipping address
     */
    public function __construct(
        public string $id,
        public UserInterface $from,
        public string $invoicePayload,
        public ShippingAddressInterface $shippingAddress,
    ) {
    }
}
