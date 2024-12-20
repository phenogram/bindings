<?php

namespace Phenogram\Bindings\Types;

/**
 * Represents the content of a venue message to be sent as the result of an inline query.
 */
class InputVenueMessageContent extends InputMessageContent implements Interfaces\InputVenueMessageContentInterface
{
    /**
     * @param float       $latitude        Latitude of the venue in degrees
     * @param float       $longitude       Longitude of the venue in degrees
     * @param string      $title           Name of the venue
     * @param string      $address         Address of the venue
     * @param string|null $foursquareId    Optional. Foursquare identifier of the venue, if known
     * @param string|null $foursquareType  Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     * @param string|null $googlePlaceId   Optional. Google Places identifier of the venue
     * @param string|null $googlePlaceType Optional. Google Places type of the venue. (See supported types.)
     */
    public function __construct(
        public float $latitude,
        public float $longitude,
        public string $title,
        public string $address,
        public ?string $foursquareId = null,
        public ?string $foursquareType = null,
        public ?string $googlePlaceId = null,
        public ?string $googlePlaceType = null,
    ) {
    }
}
