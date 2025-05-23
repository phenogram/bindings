<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a story area containing weather information. Currently, a story can have up to 3 weather areas.
 */
interface StoryAreaTypeWeatherInterface extends TypeInterface
{
    /** @var string $type Type of the area, always “weather” */
    public string $type { set; get; }

    /** @var float $temperature Temperature, in degree Celsius */
    public float $temperature { set; get; }

    /** @var string $emoji Emoji representing the weather */
    public string $emoji { set; get; }

    /** @var int $backgroundColor A color of the area background in the ARGB format */
    public int $backgroundColor { set; get; }
}
