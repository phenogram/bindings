<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InputRichBlockListItemInterface;

/**
 * A list of blocks, corresponding to the HTML tag <ul> or <ol> with multiple nested tags <li>.
 */
class InputRichBlockList extends InputRichBlock implements Interfaces\InputRichBlockListInterface
{
    /**
     * @param string                                 $type  Type of the block, always “list”
     * @param array<InputRichBlockListItemInterface> $items Items of the list
     */
    public function __construct(
        public string $type,
        public array $items,
    ) {
    }
}
