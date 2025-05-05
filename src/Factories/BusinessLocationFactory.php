<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\LocationFactory as Location;
use Phenogram\Bindings\Types\BusinessLocation;
use Phenogram\Bindings\Types\Interfaces\BusinessLocationInterface;
use Phenogram\Bindings\Types\Interfaces\LocationInterface;

class BusinessLocationFactory extends AbstractFactory
{
    /**
     * Creates a new BusinessLocation instance with default fake data.
     *
     * @param string|null            $address  Optional. Address of the business
     * @param LocationInterface|null $location Optional. Optional. Location of the business
     */
    public static function make(?string $address = null, ?LocationInterface $location = null): BusinessLocationInterface
    {
        return self::factory()->makeBusinessLocation(
            address: $address ?? self::fake()->text(50),
            location: $location,
        );
    }
}
