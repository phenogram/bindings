<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputRichBlockListItem;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockListItemInterface;

class InputRichBlockListItemFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockListItem instance with default fake data.
     *
     * @param array|null  $blocks      Optional. The content of the item
     * @param bool|null   $hasCheckbox Optional. Optional. Pass True if the item has a checkbox
     * @param bool|null   $isChecked   Optional. Optional. Pass True if the item has a checked checkbox
     * @param int|null    $value       Optional. Optional. For ordered lists, the numeric value of the item label
     * @param string|null $type        Optional. Optional. For ordered lists, the type of the item label; must be one of “a” for lowercase letters, “A” for uppercase letters, “i” for lowercase Roman numerals, “I” for uppercase Roman numerals, or “1” for decimal numbers
     */
    public static function make(
        ?array $blocks = null,
        ?bool $hasCheckbox = null,
        ?bool $isChecked = null,
        ?int $value = null,
        ?string $type = null,
    ): InputRichBlockListItemInterface {
        return self::factory()->makeInputRichBlockListItem(
            blocks: $blocks ?? [],
            hasCheckbox: $hasCheckbox,
            isChecked: $isChecked,
            value: $value,
            type: $type,
        );
    }
}
