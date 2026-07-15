<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A text covered by a spoiler.
 */
class RichTextSpoiler extends RichText implements Interfaces\RichTextSpoilerInterface
{
    /**
     * @param string            $type Type of the rich text, always “spoiler”
     * @param RichTextInterface $text The text
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
    ) {
    }
}
