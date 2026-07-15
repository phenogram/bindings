<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockInterface;

/**
 * A collage, corresponding to the custom HTML tag <tg-collage>.
 */
class RichBlockCollage extends RichBlock implements Interfaces\RichBlockCollageInterface
{
    /**
     * @param string                         $type    Type of the block, always “collage”
     * @param array<RichBlockInterface>      $blocks  Elements of the collage
     * @param RichBlockCaptionInterface|null $caption Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public array $blocks,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
