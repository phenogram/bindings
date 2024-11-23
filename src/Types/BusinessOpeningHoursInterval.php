<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes an interval of time during which a business is open.
 */
class BusinessOpeningHoursInterval implements Interfaces\BusinessOpeningHoursIntervalInterface
{
    /**
     * @param int $openingMinute The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0 - 7 * 24 * 60
     * @param int $closingMinute The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 0 - 8 * 24 * 60
     */
    public function __construct(
        public int $openingMinute,
        public int $closingMinute,
    ) {
    }
}
