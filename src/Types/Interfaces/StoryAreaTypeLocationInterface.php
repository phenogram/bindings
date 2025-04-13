<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a story area pointing to a location. Currently, a story can have up to 10 location areas.
 */
interface StoryAreaTypeLocationInterface extends TypeInterface
{
    /** @var string $type Type of the area, always “location” */
    public string $type { set; }

    /** @var float $latitude Location latitude in degrees */
    public float $latitude { set; }

    /** @var float $longitude Location longitude in degrees */
    public float $longitude { set; }

    /** @var LocationAddressInterface|null $address Optional. Address of the location */
    public ?LocationAddressInterface $address { set; }
}
