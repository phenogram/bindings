<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a venue.
 */
interface VenueInterface extends TypeInterface
{
    /** @var LocationInterface $location Venue location. Can't be a live location */
    public LocationInterface $location { set; }

    /** @var string $title Name of the venue */
    public string $title { set; }

    /** @var string $address Address of the venue */
    public string $address { set; }

    /** @var string|null $foursquareId Optional. Foursquare identifier of the venue */
    public ?string $foursquareId { set; }

    /** @var string|null $foursquareType Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.) */
    public ?string $foursquareType { set; }

    /** @var string|null $googlePlaceId Optional. Google Places identifier of the venue */
    public ?string $googlePlaceId { set; }

    /** @var string|null $googlePlaceType Optional. Google Places type of the venue. (See supported types.) */
    public ?string $googlePlaceType { set; }
}
