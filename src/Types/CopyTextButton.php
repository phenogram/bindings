<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents an inline keyboard button that copies specified text to the clipboard.
 */
class CopyTextButton implements TypeInterface
{
    /**
     * @param string $text The text to be copied to the clipboard; 1-256 characters
     */
    public function __construct(
        public string $text,
    ) {
    }
}
