<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes a story area containing weather information. Currently, a story can have up to 3 weather areas.
 */
class StoryAreaTypeWeather extends StoryAreaType implements Interfaces\StoryAreaTypeWeatherInterface
{
    /**
     * @param string $type            Type of the area, always “weather”
     * @param float  $temperature     Temperature, in degree Celsius
     * @param string $emoji           Emoji representing the weather
     * @param int    $backgroundColor A color of the area background in the ARGB format
     */
    public function __construct(
        public string $type,
        public float $temperature,
        public string $emoji,
        public int $backgroundColor,
    ) {
    }
}
