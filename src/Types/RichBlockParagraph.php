<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A text paragraph, corresponding to the HTML tag <p>.
 */
class RichBlockParagraph extends RichBlock implements Interfaces\RichBlockParagraphInterface
{
    /**
     * @param string            $type Type of the block, always “paragraph”
     * @param RichTextInterface $text Text of the block
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
    ) {
    }
}
