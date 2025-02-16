<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about an incoming shipping query.
 */
interface ShippingQueryInterface extends TypeInterface
{
    /** @var string $id Unique query identifier */
    public string $id { set; }

    /** @var UserInterface $from User who sent the query */
    public UserInterface $from { set; }

    /** @var string $invoicePayload Bot-specified invoice payload */
    public string $invoicePayload { set; }

    /** @var ShippingAddressInterface $shippingAddress User specified shipping address */
    public ShippingAddressInterface $shippingAddress { set; }
}
