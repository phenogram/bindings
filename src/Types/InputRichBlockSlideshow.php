<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InputRichBlockInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

/**
 * A slideshow, corresponding to the custom HTML tag <tg-slideshow>.
 */
class InputRichBlockSlideshow extends InputRichBlock implements Interfaces\InputRichBlockSlideshowInterface
{
    /**
     * @param string                         $type    Type of the block, always “slideshow”
     * @param array<InputRichBlockInterface> $blocks  Elements of the slideshow
     * @param RichBlockCaptionInterface|null $caption Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public array $blocks,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
