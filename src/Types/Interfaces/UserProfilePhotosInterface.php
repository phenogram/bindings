<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represent a user's profile pictures.
 */
interface UserProfilePhotosInterface extends TypeInterface
{
    /** @var int $totalCount Total number of profile pictures the target user has */
    public int $totalCount { set; }

    /** @var array<array<PhotoSizeInterface>> $photos Requested profile pictures (in up to 4 sizes each) */
    public array $photos { set; }
}
