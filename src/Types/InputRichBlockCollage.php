<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InputRichBlockInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

/**
 * A collage, corresponding to the custom HTML tag <tg-collage>.
 */
class InputRichBlockCollage extends InputRichBlock implements Interfaces\InputRichBlockCollageInterface
{
    /**
     * @param string                         $type    Type of the block, always “collage”
     * @param array<InputRichBlockInterface> $blocks  Elements of the collage
     * @param RichBlockCaptionInterface|null $caption Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public array $blocks,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
