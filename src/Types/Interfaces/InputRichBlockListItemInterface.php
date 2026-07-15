<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * An item of a list to be sent.
 */
interface InputRichBlockListItemInterface extends TypeInterface
{
    /** @var array<InputRichBlockInterface> $blocks The content of the item */
    public array $blocks { set; get; }

    /** @var bool|null $hasCheckbox Optional. Pass True if the item has a checkbox */
    public ?bool $hasCheckbox { set; get; }

    /** @var bool|null $isChecked Optional. Pass True if the item has a checked checkbox */
    public ?bool $isChecked { set; get; }

    /** @var int|null $value Optional. For ordered lists, the numeric value of the item label */
    public ?int $value { set; get; }

    /** @var string|null $type Optional. For ordered lists, the type of the item label; must be one of “a” for lowercase letters, “A” for uppercase letters, “i” for lowercase Roman numerals, “I” for uppercase Roman numerals, or “1” for decimal numbers */
    public ?string $type { set; get; }
}
