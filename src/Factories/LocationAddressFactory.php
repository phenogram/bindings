<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\LocationAddressInterface;
use Phenogram\Bindings\Types\LocationAddress;

class LocationAddressFactory extends AbstractFactory
{
    /**
     * Creates a new LocationAddress instance with default fake data.
     *
     * @param string|null $countryCode Optional. The two-letter ISO 3166-1 alpha-2 country code of the country where the location is located
     * @param string|null $state       Optional. Optional. State of the location
     * @param string|null $city        Optional. Optional. City of the location
     * @param string|null $street      Optional. Optional. Street address of the location
     */
    public static function make(
        ?string $countryCode = null,
        ?string $state = null,
        ?string $city = null,
        ?string $street = null,
    ): LocationAddressInterface {
        return self::factory()->makeLocationAddress(
            countryCode: $countryCode ?? self::fake()->text(50),
            state: $state,
            city: $city,
            street: $street,
        );
    }
}
