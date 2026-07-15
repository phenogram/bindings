<?php

namespace Phenogram\Bindings\Types;

/**
 * A divider, corresponding to the HTML tag <hr/>.
 */
class RichBlockDivider extends RichBlock implements Interfaces\RichBlockDividerInterface
{
    /**
     * @param string $type Type of the block, always “divider”
     */
    public function __construct(
        public string $type,
    ) {
    }
}
