<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\RichBlockTableCellFactory as RichBlockTableCell;
use Phenogram\Bindings\Types\Interfaces\RichBlockTableInterface;
use Phenogram\Bindings\Types\RichBlockTable;

class RichBlockTableFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockTable instance with default fake data.
     *
     * @param string|null                                                 $type       Optional. Type of the block, always “table”
     * @param array|null                                                  $cells      Optional. Cells of the table
     * @param bool|null                                                   $isBordered Optional. Optional. True, if the table has borders
     * @param bool|null                                                   $isStriped  Optional. Optional. True, if the table is striped
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $caption    Optional. Optional. Caption of the table
     */
    public static function make(
        ?string $type = null,
        ?array $cells = null,
        ?bool $isBordered = null,
        ?bool $isStriped = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $caption = null,
    ): RichBlockTableInterface {
        return self::factory()->makeRichBlockTable(
            type: $type ?? self::fake()->word(),
            cells: $cells ?? array_map(fn () => array_map(fn () => RichBlockTableCell::make(), range(0, self::fake()->numberBetween(0, 1))), range(0, self::fake()->numberBetween(0, 2))),
            isBordered: $isBordered,
            isStriped: $isStriped,
            caption: $caption,
        );
    }
}
