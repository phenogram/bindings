<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\BusinessOpeningHoursIntervalInterface;

/**
 * Describes the opening hours of a business.
 */
class BusinessOpeningHours implements Interfaces\BusinessOpeningHoursInterface
{
    /**
     * @param string                                       $timeZoneName Unique name of the time zone for which the opening hours are defined
     * @param array<BusinessOpeningHoursIntervalInterface> $openingHours List of time intervals describing business opening hours
     */
    public function __construct(
        public string $timeZoneName,
        public array $openingHours,
    ) {
    }
}
