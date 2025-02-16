<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes the opening hours of a business.
 */
interface BusinessOpeningHoursInterface extends TypeInterface
{
    /** @var string $timeZoneName Unique name of the time zone for which the opening hours are defined */
    public string $timeZoneName { set; }

    /** @var array<BusinessOpeningHoursIntervalInterface> $openingHours List of time intervals describing business opening hours */
    public array $openingHours { set; }
}
