<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes the physical address of a location.
 */
class LocationAddress implements Interfaces\LocationAddressInterface
{
    /**
     * @param string      $countryCode The two-letter ISO 3166-1 alpha-2 country code of the country where the location is located
     * @param string|null $state       Optional. State of the location
     * @param string|null $city        Optional. City of the location
     * @param string|null $street      Optional. Street address of the location
     */
    public function __construct(
        public string $countryCode,
        public ?string $state = null,
        public ?string $city = null,
        public ?string $street = null,
    ) {
    }
}
