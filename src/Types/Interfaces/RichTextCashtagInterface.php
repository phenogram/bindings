<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A cashtag.
 */
interface RichTextCashtagInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “cashtag” */
    public string $type { set; get; }

    /** @var RichTextInterface|string|array<mixed> $text The text */
    public RichTextInterface|string|array $text { set; get; }

    /** @var string $cashtag The cashtag */
    public string $cashtag { set; get; }
}
