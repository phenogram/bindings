<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A button.
 */
interface RichTextButtonInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “button” */
    public string $type { set; get; }

    /** @var RichMessageButtonInterface $button The button */
    public RichMessageButtonInterface $button { set; get; }
}
