<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichBlockInterface;
use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * An expandable block for details disclosure, corresponding to the HTML tag <details>.
 */
class RichBlockDetails extends RichBlock implements Interfaces\RichBlockDetailsInterface
{
    /**
     * @param string                    $type    Type of the block, always “details”
     * @param RichTextInterface         $summary Always shown summary of the block
     * @param array<RichBlockInterface> $blocks  Content of the block
     * @param bool|null                 $isOpen  Optional. True, if the content of the block is visible by default
     */
    public function __construct(
        public string $type,
        public RichTextInterface $summary,
        public array $blocks,
        public ?bool $isOpen = null,
    ) {
    }
}
