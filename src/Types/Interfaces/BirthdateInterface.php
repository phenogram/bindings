<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes the birthdate of a user.
 */
interface BirthdateInterface extends TypeInterface
{
    /** @var int $day Day of the user's birth; 1-31 */
    public int $day { set; get; }

    /** @var int $month Month of the user's birth; 1-12 */
    public int $month { set; get; }

    /** @var int|null $year Optional. Year of the user's birth */
    public ?int $year { set; get; }
}
