<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a video to post as a story.
 */
interface InputStoryContentVideoInterface extends TypeInterface
{
    /** @var string $type Type of the content, must be video */
    public string $type { set; }

    /** @var string $video The video to post as a story. The video must be of the size 720x1280, streamable, encoded with H.265 codec, with key frames added each second in the MPEG4 format, and must not exceed 30 MB. The video can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the video was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files » */
    public string $video { set; }

    /** @var float|null $duration Optional. Precise duration of the video in seconds; 0-60 */
    public ?float $duration { set; }

    /** @var float|null $coverFrameTimestamp Optional. Timestamp in seconds of the frame that will be used as the static cover for the story. Defaults to 0.0. */
    public ?float $coverFrameTimestamp { set; }

    /** @var bool|null $isAnimation Optional. Pass True if the video has no sound */
    public ?bool $isAnimation { set; }
}
