<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * Caption of a rich formatted block.
 */
class RichBlockCaption implements Interfaces\RichBlockCaptionInterface
{
    /**
     * @param RichTextInterface|string|array<mixed>      $text   Block caption
     * @param RichTextInterface|string|array<mixed>|null $credit Optional. Block credit which corresponds to the HTML tag <cite>
     */
    public function __construct(
        public RichTextInterface|string|array $text,
        public RichTextInterface|string|array|null $credit = null,
    ) {
    }
}
