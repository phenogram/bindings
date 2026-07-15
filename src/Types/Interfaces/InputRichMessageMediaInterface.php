<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a media element embedded in an outgoing rich message.
 */
interface InputRichMessageMediaInterface extends TypeInterface
{
    /** @var string $id Unique identifier of the media used in a tg://photo?id=, tg://video?id=, or tg://audio?id= link. 1-64 characters, only A-Z, a-z, 0-9, _ and - are allowed. */
    public string $id { set; get; }

    /** @var InputMediaAnimationInterface|InputMediaAudioInterface|InputMediaPhotoInterface|InputMediaVideoInterface|InputMediaVoiceNoteInterface $media The media to be sent. Everything except the media itself and its properties is ignored. */
    public InputMediaAnimationInterface|InputMediaAudioInterface|InputMediaPhotoInterface|InputMediaVideoInterface|InputMediaVoiceNoteInterface $media { set; get; }
}
