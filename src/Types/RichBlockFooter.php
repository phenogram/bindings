<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A footer, corresponding to the HTML tag <footer>.
 */
class RichBlockFooter extends RichBlock implements Interfaces\RichBlockFooterInterface
{
    /**
     * @param string            $type Type of the block, always “footer”
     * @param RichTextInterface $text Text of the block
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
    ) {
    }
}
