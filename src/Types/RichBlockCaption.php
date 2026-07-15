<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * Caption of a rich formatted block.
 */
class RichBlockCaption implements Interfaces\RichBlockCaptionInterface
{
    /**
     * @param RichTextInterface      $text   Block caption
     * @param RichTextInterface|null $credit Optional. Block credit which corresponds to the HTML tag <cite>
     */
    public function __construct(
        public RichTextInterface $text,
        public ?RichTextInterface $credit = null,
    ) {
    }
}
