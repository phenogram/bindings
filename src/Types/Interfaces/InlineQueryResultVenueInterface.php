<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the venue.
 */
interface InlineQueryResultVenueInterface extends TypeInterface
{
	/** @var string $type Type of the result, must be venue */
	public string $type { set; get; }

	/** @var string $id Unique identifier for this result, 1-64 Bytes */
	public string $id { set; get; }

	/** @var float $latitude Latitude of the venue location in degrees */
	public float $latitude { set; get; }

	/** @var float $longitude Longitude of the venue location in degrees */
	public float $longitude { set; get; }

	/** @var string $title Title of the venue */
	public string $title { set; get; }

	/** @var string $address Address of the venue */
	public string $address { set; get; }

	/** @var string|null $foursquareId Optional. Foursquare identifier of the venue if known */
	public ?string $foursquareId { set; get; }

	/** @var string|null $foursquareType Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.) */
	public ?string $foursquareType { set; get; }

	/** @var string|null $googlePlaceId Optional. Google Places identifier of the venue */
	public ?string $googlePlaceId { set; get; }

	/** @var string|null $googlePlaceType Optional. Google Places type of the venue. (See supported types.) */
	public ?string $googlePlaceType { set; get; }

	/** @var InlineKeyboardMarkupInterface|null $replyMarkup Optional. Inline keyboard attached to the message */
	public ?InlineKeyboardMarkupInterface $replyMarkup { set; get; }

	/** @var InputMessageContentInterface|null $inputMessageContent Optional. Content of the message to be sent instead of the venue */
	public ?InputMessageContentInterface $inputMessageContent { set; get; }

	/** @var string|null $thumbnailUrl Optional. Url of the thumbnail for the result */
	public ?string $thumbnailUrl { set; get; }

	/** @var int|null $thumbnailWidth Optional. Thumbnail width */
	public ?int $thumbnailWidth { set; get; }

	/** @var int|null $thumbnailHeight Optional. Thumbnail height */
	public ?int $thumbnailHeight { set; get; }
}
