<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents the content of a location message to be sent as the result of an inline query.
 */
interface InputLocationMessageContentInterface extends TypeInterface
{
    /** @var float $latitude Latitude of the location in degrees */
    public float $latitude { set; }

    /** @var float $longitude Longitude of the location in degrees */
    public float $longitude { set; }

    /** @var float|null $horizontalAccuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500 */
    public ?float $horizontalAccuracy { set; }

    /** @var int|null $livePeriod Optional. Period in seconds during which the location can be updated, should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely. */
    public ?int $livePeriod { set; }

    /** @var int|null $heading Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified. */
    public ?int $heading { set; }

    /** @var int|null $proximityAlertRadius Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified. */
    public ?int $proximityAlertRadius { set; }
}
