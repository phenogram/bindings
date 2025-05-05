<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputLocationMessageContent;
use Phenogram\Bindings\Types\Interfaces\InputLocationMessageContentInterface;

class InputLocationMessageContentFactory extends AbstractFactory
{
    /**
     * Creates a new InputLocationMessageContent instance with default fake data.
     *
     * @param float|null $latitude             Optional. Latitude of the location in degrees
     * @param float|null $longitude            Optional. Longitude of the location in degrees
     * @param float|null $horizontalAccuracy   Optional. Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     * @param int|null   $livePeriod           Optional. Optional. Period in seconds during which the location can be updated, should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.
     * @param int|null   $heading              Optional. Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @param int|null   $proximityAlertRadius Optional. Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     */
    public static function make(
        ?float $latitude = null,
        ?float $longitude = null,
        ?float $horizontalAccuracy = null,
        ?int $livePeriod = null,
        ?int $heading = null,
        ?int $proximityAlertRadius = null,
    ): InputLocationMessageContentInterface {
        return self::factory()->makeInputLocationMessageContent(
            latitude: $latitude ?? self::fake()->latitude(),
            longitude: $longitude ?? self::fake()->longitude(),
            horizontalAccuracy: $horizontalAccuracy,
            livePeriod: $livePeriod,
            heading: $heading,
            proximityAlertRadius: $proximityAlertRadius,
        );
    }
}
