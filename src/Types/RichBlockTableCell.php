<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * Cell in a table.
 */
class RichBlockTableCell implements Interfaces\RichBlockTableCellInterface
{
    /**
     * @param string                 $align    Horizontal cell content alignment. Currently, must be one of “left”, “center”, or “right”.
     * @param string                 $valign   Vertical cell content alignment. Currently, must be one of “top”, “middle”, or “bottom”.
     * @param RichTextInterface|null $text     Optional. Text in the cell. If omitted, then the cell is invisible.
     * @param bool|null              $isHeader Optional. True, if the cell is a header cell
     * @param int|null               $colspan  Optional. The number of columns the cell spans if it is bigger than 1
     * @param int|null               $rowspan  Optional. The number of rows the cell spans if it is bigger than 1
     */
    public function __construct(
        public string $align,
        public string $valign,
        public ?RichTextInterface $text = null,
        public ?bool $isHeader = null,
        public ?int $colspan = null,
        public ?int $rowspan = null,
    ) {
    }
}
