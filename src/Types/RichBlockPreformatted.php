<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A preformatted text block, corresponding to the nested HTML tags <pre> and <code>.
 */
class RichBlockPreformatted extends RichBlock implements Interfaces\RichBlockPreformattedInterface
{
    /**
     * @param string            $type     Type of the block, always “pre”
     * @param RichTextInterface $text     Text of the block
     * @param string|null       $language Optional. The programming language of the text
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
        public ?string $language = null,
    ) {
    }
}
