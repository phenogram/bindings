<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InputMediaAnimationInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

/**
 * A block with an animation, corresponding to the HTML tag <video>.
 */
class InputRichBlockAnimation extends InputRichBlock implements Interfaces\InputRichBlockAnimationInterface
{
    /**
     * @param string                         $type      Type of the block, always “animation”
     * @param InputMediaAnimationInterface   $animation The animation. Caption is ignored.
     * @param RichBlockCaptionInterface|null $caption   Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public InputMediaAnimationInterface $animation,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
