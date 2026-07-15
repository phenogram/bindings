<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichBlockInterface;

/**
 * An item of a list.
 */
class RichBlockListItem implements Interfaces\RichBlockListItemInterface
{
    /**
     * @param string                    $label       Label of the item
     * @param array<RichBlockInterface> $blocks      The content of the item
     * @param bool|null                 $hasCheckbox Optional. True, if the item has a checkbox
     * @param bool|null                 $isChecked   Optional. True, if the item has a checked checkbox
     * @param int|null                  $value       Optional. For ordered lists, the numeric value of the item label
     * @param string|null               $type        Optional. For ordered lists, the type of the item label; must be one of “a” for lowercase letters, “A” for uppercase letters, “i” for lowercase Roman numerals, “I” for uppercase Roman numerals, or “1” for decimal numbers
     */
    public function __construct(
        public string $label,
        public array $blocks,
        public ?bool $hasCheckbox = null,
        public ?bool $isChecked = null,
        public ?int $value = null,
        public ?string $type = null,
    ) {
    }
}
