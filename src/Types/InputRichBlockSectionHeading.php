<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A section heading, corresponding to the HTML tags <h1>, <h2>, <h3>, <h4>, <h5>, or <h6>.
 */
class InputRichBlockSectionHeading extends InputRichBlock implements Interfaces\InputRichBlockSectionHeadingInterface
{
    /**
     * @param string                                $type Type of the block, always “heading”
     * @param RichTextInterface|string|array<mixed> $text Text of the block
     * @param int                                   $size Relative size of the text font; 1-6, 1 is the largest, 6 is the smallest
     */
    public function __construct(
        public string $type,
        public RichTextInterface|string|array $text,
        public int $size,
    ) {
    }
}
