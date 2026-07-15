<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InputMediaAnimationInterface;
use Phenogram\Bindings\Types\Interfaces\InputMediaAudioInterface;
use Phenogram\Bindings\Types\Interfaces\InputMediaPhotoInterface;
use Phenogram\Bindings\Types\Interfaces\InputMediaVideoInterface;
use Phenogram\Bindings\Types\Interfaces\InputMediaVoiceNoteInterface;

/**
 * Describes a media element embedded in an outgoing rich message.
 */
class InputRichMessageMedia implements Interfaces\InputRichMessageMediaInterface
{
    /**
     * @param string                                                                                                                               $id    Unique identifier of the media used in a tg://photo?id=, tg://video?id=, or tg://audio?id= link. 1-64 characters, only A-Z, a-z, 0-9, _ and - are allowed.
     * @param InputMediaAnimationInterface|InputMediaAudioInterface|InputMediaPhotoInterface|InputMediaVideoInterface|InputMediaVoiceNoteInterface $media The media to be sent. Everything except the media itself and its properties is ignored.
     */
    public function __construct(
        public string $id,
        public InputMediaAnimationInterface|InputMediaAudioInterface|InputMediaPhotoInterface|InputMediaVideoInterface|InputMediaVoiceNoteInterface $media,
    ) {
    }
}
