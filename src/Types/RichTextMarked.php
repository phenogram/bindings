<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A marked text.
 */
class RichTextMarked extends RichText implements Interfaces\RichTextMarkedInterface
{
    /**
     * @param string            $type Type of the rich text, always “marked”
     * @param RichTextInterface $text The text
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
    ) {
    }
}
