<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A monowidth text.
 */
class RichTextCode extends RichText implements Interfaces\RichTextCodeInterface
{
    /**
     * @param string            $type Type of the rich text, always “code”
     * @param RichTextInterface $text The text
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
    ) {
    }
}
