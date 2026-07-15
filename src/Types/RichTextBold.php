<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A bold text.
 */
class RichTextBold extends RichText implements Interfaces\RichTextBoldInterface
{
    /**
     * @param string            $type Type of the rich text, always “bold”
     * @param RichTextInterface $text The text
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
    ) {
    }
}
