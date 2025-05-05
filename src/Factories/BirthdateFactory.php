<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Birthdate;
use Phenogram\Bindings\Types\Interfaces\BirthdateInterface;

class BirthdateFactory extends AbstractFactory
{
    /**
     * Creates a new Birthdate instance with default fake data.
     *
     * @param int|null $day   Optional. Day of the user's birth; 1-31
     * @param int|null $month Optional. Month of the user's birth; 1-12
     * @param int|null $year  Optional. Optional. Year of the user's birth
     */
    public static function make(?int $day = null, ?int $month = null, ?int $year = null): BirthdateInterface
    {
        return self::factory()->makeBirthdate(
            day: $day ?? self::fake()->randomNumber(),
            month: $month ?? self::fake()->randomNumber(),
            year: $year,
        );
    }
}
