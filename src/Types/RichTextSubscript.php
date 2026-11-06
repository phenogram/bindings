<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A subscript text.
 */
class RichTextSubscript extends RichText implements Interfaces\RichTextSubscriptInterface
{
    /**
     * @param string                                $type Type of the rich text, always “subscript”
     * @param RichTextInterface|string|array<mixed> $text The text
     */
    public function __construct(
        public string $type,
        public RichTextInterface|string|array $text,
    ) {
    }
}
