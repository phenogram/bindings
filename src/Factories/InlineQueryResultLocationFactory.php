<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineQueryResultLocation;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultLocationInterface;

class InlineQueryResultLocationFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQueryResultLocation instance with default fake data.
     *
     * @param string|null                                                            $type                 Optional. Type of the result, must be location
     * @param string|null                                                            $id                   Optional. Unique identifier for this result, 1-64 Bytes
     * @param float|null                                                             $latitude             Optional. Location latitude in degrees
     * @param float|null                                                             $longitude            Optional. Location longitude in degrees
     * @param string|null                                                            $title                Optional. Location title
     * @param float|null                                                             $horizontalAccuracy   Optional. Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     * @param int|null                                                               $livePeriod           Optional. Optional. Period in seconds during which the location can be updated, should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.
     * @param int|null                                                               $heading              Optional. Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @param int|null                                                               $proximityAlertRadius Optional. Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     * @param InlineKeyboardMarkupInterface|null                                     $replyMarkup          Optional. Optional. Inline keyboard attached to the message
     * @param \Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface|null $inputMessageContent  Optional. Optional. Content of the message to be sent instead of the location
     * @param string|null                                                            $thumbnailUrl         Optional. Optional. Url of the thumbnail for the result
     * @param int|null                                                               $thumbnailWidth       Optional. Optional. Thumbnail width
     * @param int|null                                                               $thumbnailHeight      Optional. Optional. Thumbnail height
     */
    public static function make(
        ?string $type = null,
        ?string $id = null,
        ?float $latitude = null,
        ?float $longitude = null,
        ?string $title = null,
        ?float $horizontalAccuracy = null,
        ?int $livePeriod = null,
        ?int $heading = null,
        ?int $proximityAlertRadius = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
        ?\Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface $inputMessageContent = null,
        ?string $thumbnailUrl = null,
        ?int $thumbnailWidth = null,
        ?int $thumbnailHeight = null,
    ): InlineQueryResultLocationInterface {
        return self::factory()->makeInlineQueryResultLocation(
            type: $type ?? self::fake()->word(),
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            latitude: $latitude ?? self::fake()->latitude(),
            longitude: $longitude ?? self::fake()->longitude(),
            title: $title ?? self::fake()->sentence(3),
            horizontalAccuracy: $horizontalAccuracy,
            livePeriod: $livePeriod,
            heading: $heading,
            proximityAlertRadius: $proximityAlertRadius,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
            thumbnailUrl: $thumbnailUrl,
            thumbnailWidth: $thumbnailWidth,
            thumbnailHeight: $thumbnailHeight,
        );
    }
}
