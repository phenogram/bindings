<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineQueryResultVenue;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultVenueInterface;

class InlineQueryResultVenueFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQueryResultVenue instance with default fake data.
     *
     * @param string|null                                                            $type                Optional. Type of the result, must be venue
     * @param string|null                                                            $id                  Optional. Unique identifier for this result, 1-64 Bytes
     * @param float|null                                                             $latitude            Optional. Latitude of the venue location in degrees
     * @param float|null                                                             $longitude           Optional. Longitude of the venue location in degrees
     * @param string|null                                                            $title               Optional. Title of the venue
     * @param string|null                                                            $address             Optional. Address of the venue
     * @param string|null                                                            $foursquareId        Optional. Optional. Foursquare identifier of the venue if known
     * @param string|null                                                            $foursquareType      Optional. Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     * @param string|null                                                            $googlePlaceId       Optional. Optional. Google Places identifier of the venue
     * @param string|null                                                            $googlePlaceType     Optional. Optional. Google Places type of the venue. (See supported types.)
     * @param InlineKeyboardMarkupInterface|null                                     $replyMarkup         Optional. Optional. Inline keyboard attached to the message
     * @param \Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface|null $inputMessageContent Optional. Optional. Content of the message to be sent instead of the venue
     * @param string|null                                                            $thumbnailUrl        Optional. Optional. Url of the thumbnail for the result
     * @param int|null                                                               $thumbnailWidth      Optional. Optional. Thumbnail width
     * @param int|null                                                               $thumbnailHeight     Optional. Optional. Thumbnail height
     */
    public static function make(
        ?string $type = null,
        ?string $id = null,
        ?float $latitude = null,
        ?float $longitude = null,
        ?string $title = null,
        ?string $address = null,
        ?string $foursquareId = null,
        ?string $foursquareType = null,
        ?string $googlePlaceId = null,
        ?string $googlePlaceType = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
        ?\Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface $inputMessageContent = null,
        ?string $thumbnailUrl = null,
        ?int $thumbnailWidth = null,
        ?int $thumbnailHeight = null,
    ): InlineQueryResultVenueInterface {
        return self::factory()->makeInlineQueryResultVenue(
            type: $type ?? self::fake()->word(),
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            latitude: $latitude ?? self::fake()->latitude(),
            longitude: $longitude ?? self::fake()->longitude(),
            title: $title ?? self::fake()->sentence(3),
            address: $address ?? self::fake()->text(50),
            foursquareId: $foursquareId,
            foursquareType: $foursquareType,
            googlePlaceId: $googlePlaceId,
            googlePlaceType: $googlePlaceType,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
            thumbnailUrl: $thumbnailUrl,
            thumbnailWidth: $thumbnailWidth,
            thumbnailHeight: $thumbnailHeight,
        );
    }
}
