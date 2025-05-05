<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\BusinessOpeningHoursIntervalFactory as BusinessOpeningHoursInterval;
use Phenogram\Bindings\Types\BusinessOpeningHours;
use Phenogram\Bindings\Types\Interfaces\BusinessOpeningHoursInterface;

class BusinessOpeningHoursFactory extends AbstractFactory
{
    /**
     * Creates a new BusinessOpeningHours instance with default fake data.
     *
     * @param string|null $timeZoneName Optional. Unique name of the time zone for which the opening hours are defined
     * @param array|null  $openingHours Optional. List of time intervals describing business opening hours
     */
    public static function make(?string $timeZoneName = null, ?array $openingHours = null): BusinessOpeningHoursInterface
    {
        return self::factory()->makeBusinessOpeningHours(
            timeZoneName: $timeZoneName ?? self::fake()->text(50),
            openingHours: $openingHours ?? array_map(fn () => BusinessOpeningHoursInterval::make(), range(0, self::fake()->numberBetween(0, 2))),
        );
    }
}
