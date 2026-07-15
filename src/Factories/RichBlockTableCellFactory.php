<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichBlockTableCellInterface;
use Phenogram\Bindings\Types\RichBlockTableCell;

class RichBlockTableCellFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockTableCell instance with default fake data.
     *
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text     Optional. Optional. Text in the cell. If omitted, then the cell is invisible.
     * @param bool|null                                                   $isHeader Optional. Optional. True, if the cell is a header cell
     * @param int|null                                                    $colspan  Optional. Optional. The number of columns the cell spans if it is bigger than 1
     * @param int|null                                                    $rowspan  Optional. Optional. The number of rows the cell spans if it is bigger than 1
     * @param string|null                                                 $align    Optional. Horizontal cell content alignment. Currently, must be one of “left”, “center”, or “right”.
     * @param string|null                                                 $valign   Optional. Vertical cell content alignment. Currently, must be one of “top”, “middle”, or “bottom”.
     */
    public static function make(
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
        ?bool $isHeader = null,
        ?int $colspan = null,
        ?int $rowspan = null,
        ?string $align = null,
        ?string $valign = null,
    ): RichBlockTableCellInterface {
        return self::factory()->makeRichBlockTableCell(
            text: $text,
            isHeader: $isHeader,
            colspan: $colspan,
            rowspan: $rowspan,
            align: $align ?? self::fake()->text(50),
            valign: $valign ?? self::fake()->text(50),
        );
    }
}
