<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\PhotoSizeFactory as PhotoSize;
use Phenogram\Bindings\Types\Interfaces\PaidMediaPhotoInterface;
use Phenogram\Bindings\Types\PaidMediaPhoto;

class PaidMediaPhotoFactory extends AbstractFactory
{
    /**
     * Creates a new PaidMediaPhoto instance with default fake data.
     *
     * @param string|null $type  Optional. Type of the paid media, always “photo”
     * @param array|null  $photo Optional. The photo
     */
    public static function make(?string $type = null, ?array $photo = null): PaidMediaPhotoInterface
    {
        return self::factory()->makePaidMediaPhoto(
            type: $type ?? self::fake()->word(),
            photo: $photo ?? array_map(fn () => PhotoSize::make(), range(0, self::fake()->numberBetween(0, 2))),
        );
    }
}
