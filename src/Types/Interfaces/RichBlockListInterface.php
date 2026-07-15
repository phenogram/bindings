<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A list of blocks, corresponding to the HTML tag <ul> or <ol> with multiple nested tags <li>.
 */
interface RichBlockListInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “list” */
    public string $type { set; get; }

    /** @var array<RichBlockListItemInterface> $items Items of the list */
    public array $items { set; get; }
}
