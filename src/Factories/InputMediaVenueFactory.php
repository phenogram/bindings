<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputMediaVenue;
use Phenogram\Bindings\Types\Interfaces\InputMediaVenueInterface;

class InputMediaVenueFactory extends AbstractFactory
{
    /**
     * Creates a new InputMediaVenue instance with default fake data.
     *
     * @param string|null $type            Optional. Type of the result, must be venue
     * @param float|null  $latitude        Optional. Latitude of the location
     * @param float|null  $longitude       Optional. Longitude of the location
     * @param string|null $title           Optional. Name of the venue
     * @param string|null $address         Optional. Address of the venue
     * @param string|null $foursquareId    Optional. Optional. Foursquare identifier of the venue
     * @param string|null $foursquareType  Optional. Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     * @param string|null $googlePlaceId   Optional. Optional. Google Places identifier of the venue
     * @param string|null $googlePlaceType Optional. Optional. Google Places type of the venue. (See supported types.)
     */
    public static function make(
        ?string $type = null,
        ?float $latitude = null,
        ?float $longitude = null,
        ?string $title = null,
        ?string $address = null,
        ?string $foursquareId = null,
        ?string $foursquareType = null,
        ?string $googlePlaceId = null,
        ?string $googlePlaceType = null,
    ): InputMediaVenueInterface {
        return self::factory()->makeInputMediaVenue(
            type: $type ?? self::fake()->word(),
            latitude: $latitude ?? self::fake()->latitude(),
            longitude: $longitude ?? self::fake()->longitude(),
            title: $title ?? self::fake()->sentence(3),
            address: $address ?? self::fake()->text(50),
            foursquareId: $foursquareId,
            foursquareType: $foursquareType,
            googlePlaceId: $googlePlaceId,
            googlePlaceType: $googlePlaceType,
        );
    }
}
