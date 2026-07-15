<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A monowidth text.
 */
interface RichTextCodeInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “code” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The text */
    public RichTextInterface $text { set; get; }
}
