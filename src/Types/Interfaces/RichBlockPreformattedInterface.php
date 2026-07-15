<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A preformatted text block, corresponding to the nested HTML tags <pre> and <code>.
 */
interface RichBlockPreformattedInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “pre” */
    public string $type { set; get; }

    /** @var RichTextInterface $text Text of the block */
    public RichTextInterface $text { set; get; }

    /** @var string|null $language Optional. The programming language of the text */
    public ?string $language { set; get; }
}
