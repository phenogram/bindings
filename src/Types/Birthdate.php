<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes the birthdate of a user.
 */
class Birthdate implements Interfaces\BirthdateInterface
{
    /**
     * @param int      $day   Day of the user's birth; 1-31
     * @param int      $month Month of the user's birth; 1-12
     * @param int|null $year  Optional. Year of the user's birth
     */
    public function __construct(
        public int $day,
        public int $month,
        public ?int $year = null,
    ) {
    }
}
