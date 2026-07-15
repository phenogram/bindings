<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A table, corresponding to the HTML tag <table>.
 */
interface InputRichBlockTableInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “table” */
    public string $type { set; get; }

    /** @var array<array<RichBlockTableCellInterface>> $cells Cells of the table */
    public array $cells { set; get; }

    /** @var bool|null $isBordered Optional. Pass True if the table has borders */
    public ?bool $isBordered { set; get; }

    /** @var bool|null $isStriped Optional. Pass True if the table is striped */
    public ?bool $isStriped { set; get; }

    /** @var RichTextInterface|null $caption Optional. Caption of the table */
    public ?RichTextInterface $caption { set; get; }
}
