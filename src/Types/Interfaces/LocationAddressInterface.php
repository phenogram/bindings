<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes the physical address of a location.
 */
interface LocationAddressInterface extends TypeInterface
{
    /** @var string $countryCode The two-letter ISO 3166-1 alpha-2 country code of the country where the location is located */
    public string $countryCode { set; }

    /** @var string|null $state Optional. State of the location */
    public ?string $state { set; }

    /** @var string|null $city Optional. City of the location */
    public ?string $city { set; }

    /** @var string|null $street Optional. Street address of the location */
    public ?string $street { set; }
}
