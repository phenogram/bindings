<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * An expandable block for details disclosure, corresponding to the HTML tag <details>.
 */
interface RichBlockDetailsInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “details” */
    public string $type { set; get; }

    /** @var RichTextInterface $summary Always shown summary of the block */
    public RichTextInterface $summary { set; get; }

    /** @var array<RichBlockInterface> $blocks Content of the block */
    public array $blocks { set; get; }

    /** @var bool|null $isOpen Optional. True, if the content of the block is visible by default */
    public ?bool $isOpen { set; get; }
}
