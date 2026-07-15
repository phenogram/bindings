<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;
use Phenogram\Bindings\Types\Interfaces\VideoInterface;

/**
 * A block with a video, corresponding to the HTML tag <video>.
 */
class RichBlockVideo extends RichBlock implements Interfaces\RichBlockVideoInterface
{
    /**
     * @param string                         $type       Type of the block, always “video”
     * @param VideoInterface                 $video      The video
     * @param bool|null                      $hasSpoiler Optional. True, if the media preview is covered by a spoiler animation
     * @param RichBlockCaptionInterface|null $caption    Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public VideoInterface $video,
        public ?bool $hasSpoiler = null,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
