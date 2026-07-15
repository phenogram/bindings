<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InputRichBlockInterface;
use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * An expandable block for details disclosure, corresponding to the HTML tag <details>.
 */
class InputRichBlockDetails extends InputRichBlock implements Interfaces\InputRichBlockDetailsInterface
{
    /**
     * @param string                         $type    Type of the block, always “details”
     * @param RichTextInterface              $summary Always shown summary of the block
     * @param array<InputRichBlockInterface> $blocks  Content of the block
     * @param bool|null                      $isOpen  Optional. Pass True if the content of the block is visible by default
     */
    public function __construct(
        public string $type,
        public RichTextInterface $summary,
        public array $blocks,
        public ?bool $isOpen = null,
    ) {
    }
}
