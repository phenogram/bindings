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
     * @param string                                    $type       Type of the block, always “table”
     * @param array<array<RichBlockTableCellInterface>> $cells      Cells of the table
     * @param bool|null                                 $isBordered Optional. True, if the table has borders
     * @param bool|null                                 $isStriped  Optional. True, if the table is striped
     * @param RichTextInterface|null                    $caption    Optional. Caption of the table
     */
    public function __construct(
        public string $type,
        public array $cells,
        public ?bool $isBordered = null,
        public ?bool $isStriped = null,
        public ?RichTextInterface $caption = null,
    ) {
    }
}
