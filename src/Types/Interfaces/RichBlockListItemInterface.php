<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * An item of a list.
 */
interface RichBlockListItemInterface extends TypeInterface
{
    /** @var string $label Label of the item */
    public string $label { set; get; }

    /** @var array<RichBlockInterface> $blocks The content of the item */
    public array $blocks { set; get; }

    /** @var bool|null $hasCheckbox Optional. True, if the item has a checkbox */
    public ?bool $hasCheckbox { set; get; }

    /** @var bool|null $isChecked Optional. True, if the item has a checked checkbox */
    public ?bool $isChecked { set; get; }

    /** @var int|null $value Optional. For ordered lists, the numeric value of the item label */
    public ?int $value { set; get; }

    /** @var string|null $type Optional. For ordered lists, the type of the item label; must be one of “a” for lowercase letters, “A” for uppercase letters, “i” for lowercase Roman numerals, “I” for uppercase Roman numerals, or “1” for decimal numbers */
    public ?string $type { set; get; }
}
