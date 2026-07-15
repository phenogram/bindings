<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A reference.
 */
class RichTextReference extends RichText implements Interfaces\RichTextReferenceInterface
{
    /**
     * @param string            $type Type of the rich text, always “reference”
     * @param RichTextInterface $text Text of the reference
     * @param string            $name The name of the reference
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
        public string $name,
    ) {
    }
}
