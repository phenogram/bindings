<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\LocationAddressInterface;

/**
 * Describes a story area pointing to a location. Currently, a story can have up to 10 location areas.
 */
class StoryAreaTypeLocation extends StoryAreaType implements Interfaces\StoryAreaTypeLocationInterface
{
    /**
     * @param string                        $type      Type of the area, always “location”
     * @param float                         $latitude  Location latitude in degrees
     * @param float                         $longitude Location longitude in degrees
     * @param LocationAddressInterface|null $address   Optional. Address of the location
     */
    public function __construct(
        public string $type,
        public float $latitude,
        public float $longitude,
        public ?LocationAddressInterface $address = null,
    ) {
    }
}
