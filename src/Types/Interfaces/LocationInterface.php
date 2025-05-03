<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a point on the map.
 */
interface LocationInterface extends TypeInterface
{
    /** @var float $latitude Latitude as defined by the sender */
    public float $latitude { set; get; }

    /** @var float $longitude Longitude as defined by the sender */
    public float $longitude { set; get; }

    /** @var float|null $horizontalAccuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500 */
    public ?float $horizontalAccuracy { set; get; }

    /** @var int|null $livePeriod Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only. */
    public ?int $livePeriod { set; get; }

    /** @var int|null $heading Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only. */
    public ?int $heading { set; get; }

    /** @var int|null $proximityAlertRadius Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only. */
    public ?int $proximityAlertRadius { set; get; }
}
