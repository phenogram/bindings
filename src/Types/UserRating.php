<?php

namespace Phenogram\Bindings\Types;

/**
 * This object describes the rating of a user based on their Telegram Star spendings.
 */
class UserRating implements Interfaces\UserRatingInterface
{
    /**
     * @param int      $level              Current level of the user, indicating their reliability when purchasing digital goods and services. A higher level suggests a more trustworthy customer; a negative level is likely reason for concern.
     * @param int      $rating             Numerical value of the user's rating; the higher the rating, the better
     * @param int      $currentLevelRating The rating value required to get the current level
     * @param int|null $nextLevelRating    Optional. The rating value required to get to the next level; omitted if the maximum level was reached
     */
    public function __construct(
        public int $level,
        public int $rating,
        public int $currentLevelRating,
        public ?int $nextLevelRating = null,
    ) {
    }
}
