<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A text with a link.
 */
class RichTextUrl extends RichText implements Interfaces\RichTextUrlInterface
{
    /**
     * @param string            $type Type of the rich text, always “url”
     * @param RichTextInterface $text The text
     * @param string            $url  URL of the link
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
        public string $url,
    ) {
    }
}
