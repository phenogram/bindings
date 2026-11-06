<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A superscript text.
 */
class RichTextSuperscript extends RichText implements Interfaces\RichTextSuperscriptInterface
{
    /**
     * @param string                                $type Type of the rich text, always “superscript”
     * @param RichTextInterface|string|array<mixed> $text The text
     */
    public function __construct(
        public string $type,
        public RichTextInterface|string|array $text,
    ) {
    }
}
