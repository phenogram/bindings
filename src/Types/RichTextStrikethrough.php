<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A strikethrough text.
 */
class RichTextStrikethrough extends RichText implements Interfaces\RichTextStrikethroughInterface
{
    /**
     * @param string            $type Type of the rich text, always “strikethrough”
     * @param RichTextInterface $text The text
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
    ) {
    }
}
