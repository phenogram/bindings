<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\InputMediaPhotoFactory as InputMediaPhoto;
use Phenogram\Bindings\Types\InputRichBlockPhoto;
use Phenogram\Bindings\Types\Interfaces\InputMediaPhotoInterface;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockPhotoInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

class InputRichBlockPhotoFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockPhoto instance with default fake data.
     *
     * @param string|null                    $type    Optional. Type of the block, always “photo”
     * @param InputMediaPhotoInterface|null  $photo   Optional. The photo. Caption is ignored.
     * @param RichBlockCaptionInterface|null $caption Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?InputMediaPhotoInterface $photo = null,
        ?RichBlockCaptionInterface $caption = null,
    ): InputRichBlockPhotoInterface {
        return self::factory()->makeInputRichBlockPhoto(
            type: $type ?? self::fake()->word(),
            photo: $photo ?? InputMediaPhoto::make(),
            caption: $caption,
        );
    }
}
