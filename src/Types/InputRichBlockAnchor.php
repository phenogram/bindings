<?php

namespace Phenogram\Bindings\Types;

/**
 * A block with an anchor, corresponding to the HTML tag <a> with the attribute name.
 */
class InputRichBlockAnchor extends InputRichBlock implements Interfaces\InputRichBlockAnchorInterface
{
    /**
     * @param string $type Type of the block, always “anchor”
     * @param string $name The name of the anchor
     */
    public function __construct(
        public string $type,
        public string $name,
    ) {
    }
}
