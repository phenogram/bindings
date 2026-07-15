<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Cell in a table.
 */
interface RichBlockTableCellInterface extends TypeInterface
{
    /** @var RichTextInterface|null $text Optional. Text in the cell. If omitted, then the cell is invisible. */
    public ?RichTextInterface $text { set; get; }

    /** @var bool|null $isHeader Optional. True, if the cell is a header cell */
    public ?bool $isHeader { set; get; }

    /** @var int|null $colspan Optional. The number of columns the cell spans if it is bigger than 1 */
    public ?int $colspan { set; get; }

    /** @var int|null $rowspan Optional. The number of rows the cell spans if it is bigger than 1 */
    public ?int $rowspan { set; get; }

    /** @var string $align Horizontal cell content alignment. Currently, must be one of “left”, “center”, or “right”. */
    public string $align { set; get; }

    /** @var string $valign Vertical cell content alignment. Currently, must be one of “top”, “middle”, or “bottom”. */
    public string $valign { set; get; }
}
