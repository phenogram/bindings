<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes an interval of time during which a business is open.
 */
interface BusinessOpeningHoursIntervalInterface extends TypeInterface
{
    /** @var int $openingMinute The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0 - 7 * 24 * 60 */
    public int $openingMinute { set; get; }

    /** @var int $closingMinute The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 0 - 8 * 24 * 60 */
    public int $closingMinute { set; get; }
}
