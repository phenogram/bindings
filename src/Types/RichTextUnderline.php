<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * An underlined text.
 */
class RichTextUnderline extends RichText implements Interfaces\RichTextUnderlineInterface
{
    /**
     * @param string            $type Type of the rich text, always “underline”
     * @param RichTextInterface $text The text
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
    ) {
    }
}
