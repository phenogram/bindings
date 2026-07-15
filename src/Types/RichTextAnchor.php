<?php

namespace Phenogram\Bindings\Types;

/**
 * An anchor.
 */
class RichTextAnchor extends RichText implements Interfaces\RichTextAnchorInterface
{
    /**
     * @param string $type Type of the rich text, always “anchor”
     * @param string $name The name of the anchor
     */
    public function __construct(
        public string $type,
        public string $name,
    ) {
    }
}
