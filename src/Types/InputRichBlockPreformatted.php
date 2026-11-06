<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A preformatted text block, corresponding to the nested HTML tags <pre> and <code>.
 */
class InputRichBlockPreformatted extends InputRichBlock implements Interfaces\InputRichBlockPreformattedInterface
{
    /**
     * @param string                                $type     Type of the block, always “pre”
     * @param RichTextInterface|string|array<mixed> $text     Text of the block
     * @param string|null                           $language Optional. The programming language of the text
     */
    public function __construct(
        public string $type,
        public RichTextInterface|string|array $text,
        public ?string $language = null,
    ) {
    }
}
