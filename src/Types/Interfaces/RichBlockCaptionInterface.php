<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Caption of a rich formatted block.
 */
interface RichBlockCaptionInterface extends TypeInterface
{
    /** @var RichTextInterface $text Block caption */
    public RichTextInterface $text { set; get; }

    /** @var RichTextInterface|null $credit Optional. Block credit which corresponds to the HTML tag <cite> */
    public ?RichTextInterface $credit { set; get; }
}
