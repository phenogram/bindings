<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\InputMediaAnimationFactory as InputMediaAnimation;
use Phenogram\Bindings\Types\InputRichMessageMedia;
use Phenogram\Bindings\Types\Interfaces\InputMediaAnimationInterface;
use Phenogram\Bindings\Types\Interfaces\InputMediaAudioInterface;
use Phenogram\Bindings\Types\Interfaces\InputMediaPhotoInterface;
use Phenogram\Bindings\Types\Interfaces\InputMediaVideoInterface;
use Phenogram\Bindings\Types\Interfaces\InputMediaVoiceNoteInterface;
use Phenogram\Bindings\Types\Interfaces\InputRichMessageMediaInterface;

class InputRichMessageMediaFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichMessageMedia instance with default fake data.
     *
     * @param string|null                                                                                                                               $id    Optional. Unique identifier of the media used in a tg://photo?id=, tg://video?id=, or tg://audio?id= link. 1-64 characters, only A-Z, a-z, 0-9, _ and - are allowed.
     * @param InputMediaAnimationInterface|InputMediaAudioInterface|InputMediaPhotoInterface|InputMediaVideoInterface|InputMediaVoiceNoteInterface|null $media Optional. The media to be sent. Everything except the media itself and its properties is ignored.
     */
    public static function make(
        ?string $id = null,
        InputMediaAnimationInterface|InputMediaAudioInterface|InputMediaPhotoInterface|InputMediaVideoInterface|InputMediaVoiceNoteInterface|null $media = null,
    ): InputRichMessageMediaInterface {
        return self::factory()->makeInputRichMessageMedia(
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            media: $media ?? InputMediaAnimation::make(),
        );
    }
}
