<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\StoryAreaTypeWeatherInterface;
use Phenogram\Bindings\Types\StoryAreaTypeWeather;

class StoryAreaTypeWeatherFactory extends AbstractFactory
{
    /**
     * Creates a new StoryAreaTypeWeather instance with default fake data.
     *
     * @param string|null $type            Optional. Type of the area, always “weather”
     * @param float|null  $temperature     Optional. Temperature, in degree Celsius
     * @param string|null $emoji           Optional. Emoji representing the weather
     * @param int|null    $backgroundColor Optional. A color of the area background in the ARGB format
     */
    public static function make(
        ?string $type = null,
        ?float $temperature = null,
        ?string $emoji = null,
        ?int $backgroundColor = null,
    ): StoryAreaTypeWeatherInterface {
        return self::factory()->makeStoryAreaTypeWeather(
            type: $type ?? self::fake()->word(),
            temperature: $temperature ?? self::fake()->randomFloat(),
            emoji: $emoji ?? self::fake()->text(50),
            backgroundColor: $backgroundColor ?? self::fake()->randomNumber(),
        );
    }
}
