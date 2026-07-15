<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichBlockListItemInterface;

/**
 * A list of blocks, corresponding to the HTML tag <ul> or <ol> with multiple nested tags <li>.
 */
class RichBlockList extends RichBlock implements Interfaces\RichBlockListInterface
{
    /**
     * @param string                            $type  Type of the block, always “list”
     * @param array<RichBlockListItemInterface> $items Items of the list
     */
    public function __construct(
        public string $type,
        public array $items,
    ) {
    }
}
