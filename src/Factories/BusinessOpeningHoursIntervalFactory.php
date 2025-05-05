<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BusinessOpeningHoursInterval;
use Phenogram\Bindings\Types\Interfaces\BusinessOpeningHoursIntervalInterface;

class BusinessOpeningHoursIntervalFactory extends AbstractFactory
{
    /**
     * Creates a new BusinessOpeningHoursInterval instance with default fake data.
     *
     * @param int|null $openingMinute Optional. The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0 - 7 * 24 * 60
     * @param int|null $closingMinute Optional. The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 0 - 8 * 24 * 60
     */
    public static function make(
        ?int $openingMinute = null,
        ?int $closingMinute = null,
    ): BusinessOpeningHoursIntervalInterface {
        return self::factory()->makeBusinessOpeningHoursInterval(
            openingMinute: $openingMinute ?? self::fake()->randomNumber(),
            closingMinute: $closingMinute ?? self::fake()->randomNumber(),
        );
    }
}
