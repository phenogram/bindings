<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\InputMediaVideoFactory as InputMediaVideo;
use Phenogram\Bindings\Types\InputRichBlockVideo;
use Phenogram\Bindings\Types\Interfaces\InputMediaVideoInterface;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockVideoInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

class InputRichBlockVideoFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockVideo instance with default fake data.
     *
     * @param string|null                    $type    Optional. Type of the block, always “video”
     * @param InputMediaVideoInterface|null  $video   Optional. The video. Caption is ignored.
     * @param RichBlockCaptionInterface|null $caption Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?InputMediaVideoInterface $video = null,
        ?RichBlockCaptionInterface $caption = null,
    ): InputRichBlockVideoInterface {
        return self::factory()->makeInputRichBlockVideo(
            type: $type ?? self::fake()->word(),
            video: $video ?? InputMediaVideo::make(),
            caption: $caption,
        );
    }
}
