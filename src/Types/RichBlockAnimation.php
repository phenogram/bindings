<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\AnimationInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

/**
 * A block with an animation, corresponding to the HTML tag <video>.
 */
class RichBlockAnimation extends RichBlock implements Interfaces\RichBlockAnimationInterface
{
    /**
     * @param string                         $type       Type of the block, always “animation”
     * @param AnimationInterface             $animation  The animation
     * @param bool|null                      $hasSpoiler Optional. True, if the media preview is covered by a spoiler animation
     * @param RichBlockCaptionInterface|null $caption    Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public AnimationInterface $animation,
        public ?bool $hasSpoiler = null,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
