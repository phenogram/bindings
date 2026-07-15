<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockInterface;

/**
 * A slideshow, corresponding to the custom HTML tag <tg-slideshow>.
 */
class RichBlockSlideshow extends RichBlock implements Interfaces\RichBlockSlideshowInterface
{
    /**
     * @param string                         $type    Type of the block, always “slideshow”
     * @param array<RichBlockInterface>      $blocks  Elements of the slideshow
     * @param RichBlockCaptionInterface|null $caption Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public array $blocks,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
