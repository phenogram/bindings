<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a location to be sent.
 */
interface InputMediaLocationInterface extends TypeInterface
{
    /** @var string $type Type of the result, must be location */
    public string $type { set; get; }

    /** @var float $latitude Latitude of the location */
    public float $latitude { set; get; }

    /** @var float $longitude Longitude of the location */
    public float $longitude { set; get; }

    /** @var float|null $horizontalAccuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500 */
    public ?float $horizontalAccuracy { set; get; }
}
