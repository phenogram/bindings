<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes the rating of a user based on their Telegram Star spendings.
 */
interface UserRatingInterface extends TypeInterface
{
    /** @var int $level Current level of the user, indicating their reliability when purchasing digital goods and services. A higher level suggests a more trustworthy customer; a negative level is likely reason for concern. */
    public int $level { set; get; }

    /** @var int $rating Numerical value of the user's rating; the higher the rating, the better */
    public int $rating { set; get; }

    /** @var int $currentLevelRating The rating value required to get the current level */
    public int $currentLevelRating { set; get; }

    /** @var int|null $nextLevelRating Optional. The rating value required to get to the next level; omitted if the maximum level was reached */
    public ?int $nextLevelRating { set; get; }
}
