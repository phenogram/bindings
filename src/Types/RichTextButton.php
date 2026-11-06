<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichMessageButtonInterface;

/**
 * A button.
 */
class RichTextButton extends RichText implements Interfaces\RichTextButtonInterface
{
    /**
     * @param string                     $type   Type of the rich text, always “button”
     * @param RichMessageButtonInterface $button The button
     */
    public function __construct(
        public string $type,
        public RichMessageButtonInterface $button,
    ) {
    }
}
