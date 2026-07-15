<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InputMediaVideoInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

/**
 * A block with a video, corresponding to the HTML tag <video>.
 */
class InputRichBlockVideo extends InputRichBlock implements Interfaces\InputRichBlockVideoInterface
{
    /**
     * @param string                         $type    Type of the block, always “video”
     * @param InputMediaVideoInterface       $video   The video. Caption is ignored.
     * @param RichBlockCaptionInterface|null $caption Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public InputMediaVideoInterface $video,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
