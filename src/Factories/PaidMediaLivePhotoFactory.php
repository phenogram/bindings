<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\LivePhotoFactory as LivePhoto;
use Phenogram\Bindings\Types\Interfaces\LivePhotoInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaLivePhotoInterface;
use Phenogram\Bindings\Types\PaidMediaLivePhoto;

class PaidMediaLivePhotoFactory extends AbstractFactory
{
    /**
     * Creates a new PaidMediaLivePhoto instance with default fake data.
     *
     * @param string|null             $type      Optional. Type of the paid media, always “live_photo”
     * @param LivePhotoInterface|null $livePhoto Optional. The photo
     */
    public static function make(?string $type = null, ?LivePhotoInterface $livePhoto = null): PaidMediaLivePhotoInterface
    {
        return self::factory()->makePaidMediaLivePhoto(
            type: $type ?? self::fake()->word(),
            livePhoto: $livePhoto ?? LivePhoto::make(),
        );
    }
}
