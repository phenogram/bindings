<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A hashtag.
 */
class RichTextHashtag extends RichText implements Interfaces\RichTextHashtagInterface
{
    /**
     * @param string                                $type    Type of the rich text, always “hashtag”
     * @param RichTextInterface|string|array<mixed> $text    The text
     * @param string                                $hashtag The hashtag
     */
    public function __construct(
        public string $type,
        public RichTextInterface|string|array $text,
        public string $hashtag,
    ) {
    }
}
