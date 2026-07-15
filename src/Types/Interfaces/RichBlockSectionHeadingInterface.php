<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A section heading, corresponding to the HTML tags <h1>, <h2>, <h3>, <h4>, <h5>, or <h6>.
 */
interface RichBlockSectionHeadingInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “heading” */
    public string $type { set; get; }

    /** @var RichTextInterface $text Text of the block */
    public RichTextInterface $text { set; get; }

    /** @var int $size Relative size of the text font; 1-6, 1 is the largest, 6 is the smallest */
    public int $size { set; get; }
}
