<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * An italicized text.
 */
class RichTextItalic extends RichText implements Interfaces\RichTextItalicInterface
{
    /**
     * @param string            $type Type of the rich text, always “italic”
     * @param RichTextInterface $text The text
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
    ) {
    }
}
