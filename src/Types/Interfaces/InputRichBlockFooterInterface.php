<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A footer, corresponding to the HTML tag <footer>.
 */
interface InputRichBlockFooterInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “footer” */
    public string $type { set; get; }

    /** @var RichTextInterface|string|array<mixed> $text Text of the block */
    public RichTextInterface|string|array $text { set; get; }
}
