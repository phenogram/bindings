<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A reference.
 */
interface RichTextReferenceInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “reference” */
    public string $type { set; get; }

    /** @var RichTextInterface|string|array<mixed> $text Text of the reference */
    public RichTextInterface|string|array $text { set; get; }

    /** @var string $name The name of the reference */
    public string $name { set; get; }
}
