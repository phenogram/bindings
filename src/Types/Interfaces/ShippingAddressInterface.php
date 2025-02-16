<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a shipping address.
 */
interface ShippingAddressInterface extends TypeInterface
{
    /** @var string $countryCode Two-letter ISO 3166-1 alpha-2 country code */
    public string $countryCode { set; }

    /** @var string $state State, if applicable */
    public string $state { set; }

    /** @var string $city City */
    public string $city { set; }

    /** @var string $streetLine1 First line for the address */
    public string $streetLine1 { set; }

    /** @var string $streetLine2 Second line for the address */
    public string $streetLine2 { set; }

    /** @var string $postCode Address post code */
    public string $postCode { set; }
}
