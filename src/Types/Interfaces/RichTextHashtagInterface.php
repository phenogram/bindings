<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A hashtag.
 */
interface RichTextHashtagInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “hashtag” */
    public string $type { set; get; }

    /** @var RichTextInterface|string|array<mixed> $text The text */
    public RichTextInterface|string|array $text { set; get; }

    /** @var string $hashtag The hashtag */
    public string $hashtag { set; get; }
}
