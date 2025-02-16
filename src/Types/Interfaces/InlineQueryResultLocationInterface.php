<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the location.
 */
interface InlineQueryResultLocationInterface extends TypeInterface
{
    /** @var string $type Type of the result, must be location */
    public string $type { set; }

    /** @var string $id Unique identifier for this result, 1-64 Bytes */
    public string $id { set; }

    /** @var float $latitude Location latitude in degrees */
    public float $latitude { set; }

    /** @var float $longitude Location longitude in degrees */
    public float $longitude { set; }

    /** @var string $title Location title */
    public string $title { set; }

    /** @var float|null $horizontalAccuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500 */
    public ?float $horizontalAccuracy { set; }

    /** @var int|null $livePeriod Optional. Period in seconds during which the location can be updated, should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely. */
    public ?int $livePeriod { set; }

    /** @var int|null $heading Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified. */
    public ?int $heading { set; }

    /** @var int|null $proximityAlertRadius Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified. */
    public ?int $proximityAlertRadius { set; }

    /** @var InlineKeyboardMarkupInterface|null $replyMarkup Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkupInterface $replyMarkup { set; }

    /** @var InputMessageContentInterface|null $inputMessageContent Optional. Content of the message to be sent instead of the location */
    public ?InputMessageContentInterface $inputMessageContent { set; }

    /** @var string|null $thumbnailUrl Optional. Url of the thumbnail for the result */
    public ?string $thumbnailUrl { set; }

    /** @var int|null $thumbnailWidth Optional. Thumbnail width */
    public ?int $thumbnailWidth { set; }

    /** @var int|null $thumbnailHeight Optional. Thumbnail height */
    public ?int $thumbnailHeight { set; }
}
