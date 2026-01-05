<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\UserRatingInterface;
use Phenogram\Bindings\Types\UserRating;

class UserRatingFactory extends AbstractFactory
{
    /**
     * Creates a new UserRating instance with default fake data.
     *
     * @param int|null $level              Optional. Current level of the user, indicating their reliability when purchasing digital goods and services. A higher level suggests a more trustworthy customer; a negative level is likely reason for concern.
     * @param int|null $rating             Optional. Numerical value of the user's rating; the higher the rating, the better
     * @param int|null $currentLevelRating Optional. The rating value required to get the current level
     * @param int|null $nextLevelRating    Optional. Optional. The rating value required to get to the next level; omitted if the maximum level was reached
     */
    public static function make(
        ?int $level = null,
        ?int $rating = null,
        ?int $currentLevelRating = null,
        ?int $nextLevelRating = null,
    ): UserRatingInterface {
        return self::factory()->makeUserRating(
            level: $level ?? self::fake()->randomNumber(),
            rating: $rating ?? self::fake()->randomNumber(),
            currentLevelRating: $currentLevelRating ?? self::fake()->randomNumber(),
            nextLevelRating: $nextLevelRating,
        );
    }
}
