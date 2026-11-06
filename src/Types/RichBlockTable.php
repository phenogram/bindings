<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichBlockTableCellInterface;
use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A table, corresponding to the HTML tag <table>.
 */
class RichBlockTable extends RichBlock implements Interfaces\RichBlockTableInterface
{
    /**
     * @param string                                     $type       Type of the block, always “table”
     * @param array<array<RichBlockTableCellInterface>>  $cells      Cells of the table
     * @param bool|null                                  $isBordered Optional. True, if the table has borders
     * @param bool|null                                  $isStriped  Optional. True, if the table is striped
     * @param bool|null                                  $isCompact  Optional. True, if table cells have smaller indents
     * @param RichTextInterface|string|array<mixed>|null $caption    Optional. Caption of the table
     */
    public function __construct(
        public string $type,
        public array $cells,
        public ?bool $isBordered = null,
        public ?bool $isStriped = null,
        public ?bool $isCompact = null,
        public RichTextInterface|string|array|null $caption = null,
    ) {
    }
}
