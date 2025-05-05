<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\PhotoSizeFactory as PhotoSize;
use Phenogram\Bindings\Types\Interfaces\UserProfilePhotosInterface;
use Phenogram\Bindings\Types\UserProfilePhotos;

class UserProfilePhotosFactory extends AbstractFactory
{
    /**
     * Creates a new UserProfilePhotos instance with default fake data.
     *
     * @param int|null   $totalCount Optional. Total number of profile pictures the target user has
     * @param array|null $photos     Optional. Requested profile pictures (in up to 4 sizes each)
     */
    public static function make(?int $totalCount = null, ?array $photos = null): UserProfilePhotosInterface
    {
        return self::factory()->makeUserProfilePhotos(
            totalCount: $totalCount ?? self::fake()->randomNumber(),
            photos: $photos ?? array_map(fn () => array_map(fn () => PhotoSize::make(), range(0, self::fake()->numberBetween(0, 1))), range(0, self::fake()->numberBetween(0, 2))),
        );
    }
}
