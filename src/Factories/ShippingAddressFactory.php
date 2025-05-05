<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\ShippingAddressInterface;
use Phenogram\Bindings\Types\ShippingAddress;

class ShippingAddressFactory extends AbstractFactory
{
    /**
     * Creates a new ShippingAddress instance with default fake data.
     *
     * @param string|null $countryCode Optional. Two-letter ISO 3166-1 alpha-2 country code
     * @param string|null $state       Optional. State, if applicable
     * @param string|null $city        Optional. City
     * @param string|null $streetLine1 Optional. First line for the address
     * @param string|null $streetLine2 Optional. Second line for the address
     * @param string|null $postCode    Optional. Address post code
     */
    public static function make(
        ?string $countryCode = null,
        ?string $state = null,
        ?string $city = null,
        ?string $streetLine1 = null,
        ?string $streetLine2 = null,
        ?string $postCode = null,
    ): ShippingAddressInterface {
        return self::factory()->makeShippingAddress(
            countryCode: $countryCode ?? self::fake()->text(50),
            state: $state ?? self::fake()->text(50),
            city: $city ?? self::fake()->text(50),
            streetLine1: $streetLine1 ?? self::fake()->text(50),
            streetLine2: $streetLine2 ?? self::fake()->text(50),
            postCode: $postCode ?? self::fake()->text(50),
        );
    }
}
