<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A hashtag.
 */
interface RichTextHashtagInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “hashtag” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The text */
    public RichTextInterface $text { set; get; }

    /** @var string $hashtag The hashtag */
    public string $hashtag { set; get; }
}
