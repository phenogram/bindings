<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Caption of a rich formatted block.
 */
interface RichBlockCaptionInterface extends TypeInterface
{
    /** @var RichTextInterface|string|array<mixed> $text Block caption */
    public RichTextInterface|string|array $text { set; get; }

    /** @var RichTextInterface|string|array<mixed>|null $credit Optional. Block credit which corresponds to the HTML tag <cite> */
    public RichTextInterface|string|array|null $credit { set; get; }
}
