<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A footer, corresponding to the HTML tag <footer>.
 */
interface InputRichBlockFooterInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “footer” */
    public string $type { set; get; }

    /** @var RichTextInterface $text Text of the block */
    public RichTextInterface $text { set; get; }
}
