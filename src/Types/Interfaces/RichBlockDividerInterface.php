<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A divider, corresponding to the HTML tag <hr/>.
 */
interface RichBlockDividerInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “divider” */
    public string $type { set; get; }
}
