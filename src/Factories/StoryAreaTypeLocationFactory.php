<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\LocationAddressInterface;
use Phenogram\Bindings\Types\Interfaces\StoryAreaTypeLocationInterface;
use Phenogram\Bindings\Types\StoryAreaTypeLocation;

class StoryAreaTypeLocationFactory extends AbstractFactory
{
    /**
     * Creates a new StoryAreaTypeLocation instance with default fake data.
     *
     * @param string|null                   $type      Optional. Type of the area, always “location”
     * @param float|null                    $latitude  Optional. Location latitude in degrees
     * @param float|null                    $longitude Optional. Location longitude in degrees
     * @param LocationAddressInterface|null $address   Optional. Optional. Address of the location
     */
    public static function make(
        ?string $type = null,
        ?float $latitude = null,
        ?float $longitude = null,
        ?LocationAddressInterface $address = null,
    ): StoryAreaTypeLocationInterface {
        return self::factory()->makeStoryAreaTypeLocation(
            type: $type ?? self::fake()->word(),
            latitude: $latitude ?? self::fake()->latitude(),
            longitude: $longitude ?? self::fake()->longitude(),
            address: $address,
        );
    }
}
