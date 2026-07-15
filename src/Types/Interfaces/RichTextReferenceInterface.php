<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A reference.
 */
interface RichTextReferenceInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “reference” */
    public string $type { set; get; }

    /** @var RichTextInterface $text Text of the reference */
    public RichTextInterface $text { set; get; }

    /** @var string $name The name of the reference */
    public string $name { set; get; }
}
