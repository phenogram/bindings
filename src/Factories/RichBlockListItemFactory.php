<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichBlockListItemInterface;
use Phenogram\Bindings\Types\RichBlockListItem;

class RichBlockListItemFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockListItem instance with default fake data.
     *
     * @param string|null $label       Optional. Label of the item
     * @param array|null  $blocks      Optional. The content of the item
     * @param bool|null   $hasCheckbox Optional. Optional. True, if the item has a checkbox
     * @param bool|null   $isChecked   Optional. Optional. True, if the item has a checked checkbox
     * @param int|null    $value       Optional. Optional. For ordered lists, the numeric value of the item label
     * @param string|null $type        Optional. Optional. For ordered lists, the type of the item label; must be one of “a” for lowercase letters, “A” for uppercase letters, “i” for lowercase Roman numerals, “I” for uppercase Roman numerals, or “1” for decimal numbers
     */
    public static function make(
        ?string $label = null,
        ?array $blocks = null,
        ?bool $hasCheckbox = null,
        ?bool $isChecked = null,
        ?int $value = null,
        ?string $type = null,
    ): RichBlockListItemInterface {
        return self::factory()->makeRichBlockListItem(
            label: $label ?? self::fake()->text(50),
            blocks: $blocks ?? [],
            hasCheckbox: $hasCheckbox,
            isChecked: $isChecked,
            value: $value,
            type: $type,
        );
    }
}
