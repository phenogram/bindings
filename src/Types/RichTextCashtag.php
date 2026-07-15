<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A cashtag.
 */
class RichTextCashtag extends RichText implements Interfaces\RichTextCashtagInterface
{
    /**
     * @param string            $type    Type of the rich text, always “cashtag”
     * @param RichTextInterface $text    The text
     * @param string            $cashtag The cashtag
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
        public string $cashtag,
    ) {
    }
}
