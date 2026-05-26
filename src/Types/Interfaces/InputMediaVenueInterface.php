<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a venue to be sent.
 */
interface InputMediaVenueInterface extends TypeInterface
{
    /** @var string $type Type of the result, must be venue */
    public string $type { set; get; }

    /** @var float $latitude Latitude of the location */
    public float $latitude { set; get; }

    /** @var float $longitude Longitude of the location */
    public float $longitude { set; get; }

    /** @var string $title Name of the venue */
    public string $title { set; get; }

    /** @var string $address Address of the venue */
    public string $address { set; get; }

    /** @var string|null $foursquareId Optional. Foursquare identifier of the venue */
    public ?string $foursquareId { set; get; }

    /** @var string|null $foursquareType Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.) */
    public ?string $foursquareType { set; get; }

    /** @var string|null $googlePlaceId Optional. Google Places identifier of the venue */
    public ?string $googlePlaceId { set; get; }

    /** @var string|null $googlePlaceType Optional. Google Places type of the venue. (See supported types.) */
    public ?string $googlePlaceType { set; get; }
}
