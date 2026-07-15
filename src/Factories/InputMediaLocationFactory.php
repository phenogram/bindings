<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputMediaLocation;
use Phenogram\Bindings\Types\Interfaces\InputMediaLocationInterface;

class InputMediaLocationFactory extends AbstractFactory
{
    /**
     * Creates a new InputMediaLocation instance with default fake data.
     *
     * @param string|null $type               Optional. Type of the media, must be location
     * @param float|null  $latitude           Optional. Latitude of the location
     * @param float|null  $longitude          Optional. Longitude of the location
     * @param float|null  $horizontalAccuracy Optional. Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     */
    public static function make(
        ?string $type = null,
        ?float $latitude = null,
        ?float $longitude = null,
        ?float $horizontalAccuracy = null,
    ): InputMediaLocationInterface {
        return self::factory()->makeInputMediaLocation(
            type: $type ?? self::fake()->word(),
            latitude: $latitude ?? self::fake()->latitude(),
            longitude: $longitude ?? self::fake()->longitude(),
            horizontalAccuracy: $horizontalAccuracy,
        );
    }
}
