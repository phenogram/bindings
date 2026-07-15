<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\PhotoSizeFactory as PhotoSize;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockPhotoInterface;
use Phenogram\Bindings\Types\RichBlockPhoto;

class RichBlockPhotoFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockPhoto instance with default fake data.
     *
     * @param string|null                    $type       Optional. Type of the block, always “photo”
     * @param array|null                     $photo      Optional. Available sizes of the photo
     * @param bool|null                      $hasSpoiler Optional. Optional. True, if the media preview is covered by a spoiler animation
     * @param RichBlockCaptionInterface|null $caption    Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?array $photo = null,
        ?bool $hasSpoiler = null,
        ?RichBlockCaptionInterface $caption = null,
    ): RichBlockPhotoInterface {
        return self::factory()->makeRichBlockPhoto(
            type: $type ?? self::fake()->word(),
            photo: $photo ?? array_map(fn () => PhotoSize::make(), range(0, self::fake()->numberBetween(0, 2))),
            hasSpoiler: $hasSpoiler,
            caption: $caption,
        );
    }
}
