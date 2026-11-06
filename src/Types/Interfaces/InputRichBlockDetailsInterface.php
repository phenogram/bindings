<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * An expandable block for details disclosure, corresponding to the HTML tag <details>.
 */
interface InputRichBlockDetailsInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “details” */
    public string $type { set; get; }

    /** @var RichTextInterface|string|array<mixed> $summary Always shown summary of the block */
    public RichTextInterface|string|array $summary { set; get; }

    /** @var array<InputRichBlockInterface> $blocks Content of the block */
    public array $blocks { set; get; }

    /** @var bool|null $isOpen Optional. Pass True if the content of the block is visible by default */
    public ?bool $isOpen { set; get; }
}
