<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\LocationFactory as Location;
use Phenogram\Bindings\Types\Interfaces\LocationInterface;
use Phenogram\Bindings\Types\Interfaces\VenueInterface;
use Phenogram\Bindings\Types\Venue;

class VenueFactory extends AbstractFactory
{
    /**
     * Creates a new Venue instance with default fake data.
     *
     * @param LocationInterface|null $location        Optional. Venue location. Can't be a live location
     * @param string|null            $title           Optional. Name of the venue
     * @param string|null            $address         Optional. Address of the venue
     * @param string|null            $foursquareId    Optional. Optional. Foursquare identifier of the venue
     * @param string|null            $foursquareType  Optional. Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     * @param string|null            $googlePlaceId   Optional. Optional. Google Places identifier of the venue
     * @param string|null            $googlePlaceType Optional. Optional. Google Places type of the venue. (See supported types.)
     */
    public static function make(
        ?LocationInterface $location = null,
        ?string $title = null,
        ?string $address = null,
        ?string $foursquareId = null,
        ?string $foursquareType = null,
        ?string $googlePlaceId = null,
        ?string $googlePlaceType = null,
    ): VenueInterface {
        return self::factory()->makeVenue(
            location: $location ?? Location::make(),
            title: $title ?? self::fake()->sentence(3),
            address: $address ?? self::fake()->text(50),
            foursquareId: $foursquareId,
            foursquareType: $foursquareType,
            googlePlaceId: $googlePlaceId,
            googlePlaceType: $googlePlaceType,
        );
    }
}
