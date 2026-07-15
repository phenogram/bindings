<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block with an anchor, corresponding to the HTML tag <a> with the attribute name.
 */
interface InputRichBlockAnchorInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “anchor” */
    public string $type { set; get; }

    /** @var string $name The name of the anchor */
    public string $name { set; get; }
}
