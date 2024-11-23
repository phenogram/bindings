<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface;

/**
 * Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the location.
 */
class InlineQueryResultLocation extends InlineQueryResult implements Interfaces\InlineQueryResultLocationInterface
{
    /**
     * @param string                             $id                   Unique identifier for this result, 1-64 Bytes
     * @param float                              $latitude             Location latitude in degrees
     * @param float                              $longitude            Location longitude in degrees
     * @param string                             $title                Location title
     * @param string                             $type                 Type of the result, must be location
     * @param float|null                         $horizontalAccuracy   Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     * @param int|null                           $livePeriod           Optional. Period in seconds during which the location can be updated, should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.
     * @param int|null                           $heading              Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @param int|null                           $proximityAlertRadius Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     * @param InlineKeyboardMarkupInterface|null $replyMarkup          Optional. Inline keyboard attached to the message
     * @param InputMessageContentInterface|null  $inputMessageContent  Optional. Content of the message to be sent instead of the location
     * @param string|null                        $thumbnailUrl         Optional. Url of the thumbnail for the result
     * @param int|null                           $thumbnailWidth       Optional. Thumbnail width
     * @param int|null                           $thumbnailHeight      Optional. Thumbnail height
     */
    public function __construct(
        public string $id,
        public float $latitude,
        public float $longitude,
        public string $title,
        public string $type = 'location',
        public ?float $horizontalAccuracy = null,
        public ?int $livePeriod = null,
        public ?int $heading = null,
        public ?int $proximityAlertRadius = null,
        public ?InlineKeyboardMarkupInterface $replyMarkup = null,
        public ?InputMessageContentInterface $inputMessageContent = null,
        public ?string $thumbnailUrl = null,
        public ?int $thumbnailWidth = null,
        public ?int $thumbnailHeight = null,
    ) {
    }
}
