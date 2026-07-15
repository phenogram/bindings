<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\VideoFactory as Video;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockVideoInterface;
use Phenogram\Bindings\Types\Interfaces\VideoInterface;
use Phenogram\Bindings\Types\RichBlockVideo;

class RichBlockVideoFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockVideo instance with default fake data.
     *
     * @param string|null                    $type       Optional. Type of the block, always “video”
     * @param VideoInterface|null            $video      Optional. The video
     * @param bool|null                      $hasSpoiler Optional. Optional. True, if the media preview is covered by a spoiler animation
     * @param RichBlockCaptionInterface|null $caption    Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?VideoInterface $video = null,
        ?bool $hasSpoiler = null,
        ?RichBlockCaptionInterface $caption = null,
    ): RichBlockVideoInterface {
        return self::factory()->makeRichBlockVideo(
            type: $type ?? self::fake()->word(),
            video: $video ?? Video::make(),
            hasSpoiler: $hasSpoiler,
            caption: $caption,
        );
    }
}
