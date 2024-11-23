<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\PhotoSizeInterface;

/**
 * This object represent a user's profile pictures.
 */
class UserProfilePhotos implements Interfaces\UserProfilePhotosInterface
{
    /**
     * @param int                              $totalCount Total number of profile pictures the target user has
     * @param array<array<PhotoSizeInterface>> $photos     Requested profile pictures (in up to 4 sizes each)
     */
    public function __construct(
        public int $totalCount,
        public array $photos,
    ) {
    }
}
