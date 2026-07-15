<?php

namespace Phenogram\Bindings\Types;

/**
 * Represents a location to be sent.
 */
class InputMediaLocation extends InputPollOptionMedia implements Interfaces\InputMediaLocationInterface
{
    /**
     * @param float      $latitude           Latitude of the location
     * @param float      $longitude          Longitude of the location
     * @param string     $type               Type of the media, must be location
     * @param float|null $horizontalAccuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     */
    public function __construct(
        public float $latitude,
        public float $longitude,
        public string $type = 'location',
        public ?float $horizontalAccuracy = null,
    ) {
    }
}
