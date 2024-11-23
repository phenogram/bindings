<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents the content of a venue message to be sent as the result of an inline query.
 */
interface InputVenueMessageContentInterface extends TypeInterface
{
	/** @var float $latitude Latitude of the venue in degrees */
	public float $latitude { set; get; }

	/** @var float $longitude Longitude of the venue in degrees */
	public float $longitude { set; get; }

	/** @var string $title Name of the venue */
	public string $title { set; get; }

	/** @var string $address Address of the venue */
	public string $address { set; get; }

	/** @var string|null $foursquareId Optional. Foursquare identifier of the venue, if known */
	public ?string $foursquareId { set; get; }

	/** @var string|null $foursquareType Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.) */
	public ?string $foursquareType { set; get; }

	/** @var string|null $googlePlaceId Optional. Google Places identifier of the venue */
	public ?string $googlePlaceId { set; get; }

	/** @var string|null $googlePlaceType Optional. Google Places type of the venue. (See supported types.) */
	public ?string $googlePlaceType { set; get; }
}
