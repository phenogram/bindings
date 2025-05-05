<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputStoryContentVideo;
use Phenogram\Bindings\Types\Interfaces\InputStoryContentVideoInterface;

class InputStoryContentVideoFactory extends AbstractFactory
{
    /**
     * Creates a new InputStoryContentVideo instance with default fake data.
     *
     * @param string|null $type                Optional. Type of the content, must be video
     * @param string|null $video               Optional. The video to post as a story. The video must be of the size 720x1280, streamable, encoded with H.265 codec, with key frames added each second in the MPEG4 format, and must not exceed 30 MB. The video can't be reused and can only be uploaded as a new file, so you can pass “attach://” if the video was uploaded using multipart/form-data under . More information on Sending Files »
     * @param float|null  $duration            Optional. Optional. Precise duration of the video in seconds; 0-60
     * @param float|null  $coverFrameTimestamp Optional. Optional. Timestamp in seconds of the frame that will be used as the static cover for the story. Defaults to 0.0.
     * @param bool|null   $isAnimation         Optional. Optional. Pass True if the video has no sound
     */
    public static function make(
        ?string $type = null,
        ?string $video = null,
        ?float $duration = null,
        ?float $coverFrameTimestamp = null,
        ?bool $isAnimation = null,
    ): InputStoryContentVideoInterface {
        return self::factory()->makeInputStoryContentVideo(
            type: $type ?? self::fake()->word(),
            video: $video ?? self::fake()->text(50),
            duration: $duration,
            coverFrameTimestamp: $coverFrameTimestamp,
            isAnimation: $isAnimation,
        );
    }
}
