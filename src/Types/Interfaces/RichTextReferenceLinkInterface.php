<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A link to a reference.
 */
interface RichTextReferenceLinkInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “reference_link” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The link text */
    public RichTextInterface $text { set; get; }

    /** @var string $referenceName The name of the reference */
    public string $referenceName { set; get; }
}
