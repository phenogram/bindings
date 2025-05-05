<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\LocationInterface;
use Phenogram\Bindings\Types\Location;

class LocationFactory extends AbstractFactory
{
    /**
     * Creates a new Location instance with default fake data.
     *
     * @param float|null $latitude             Optional. Latitude as defined by the sender
     * @param float|null $longitude            Optional. Longitude as defined by the sender
     * @param float|null $horizontalAccuracy   Optional. Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     * @param int|null   $livePeriod           Optional. Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
     * @param int|null   $heading              Optional. Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
     * @param int|null   $proximityAlertRadius Optional. Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
     */
    public static function make(
        ?float $latitude = null,
        ?float $longitude = null,
        ?float $horizontalAccuracy = null,
        ?int $livePeriod = null,
        ?int $heading = null,
        ?int $proximityAlertRadius = null,
    ): LocationInterface {
        return self::factory()->makeLocation(
            latitude: $latitude ?? self::fake()->latitude(),
            longitude: $longitude ?? self::fake()->longitude(),
            horizontalAccuracy: $horizontalAccuracy,
            livePeriod: $livePeriod,
            heading: $heading,
            proximityAlertRadius: $proximityAlertRadius,
        );
    }
}
