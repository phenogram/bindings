<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A text paragraph, corresponding to the HTML tag <p>.
 */
class InputRichBlockParagraph extends InputRichBlock implements Interfaces\InputRichBlockParagraphInterface
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
