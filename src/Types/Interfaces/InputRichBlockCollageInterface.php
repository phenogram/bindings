<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A collage, corresponding to the custom HTML tag <tg-collage>.
 */
interface InputRichBlockCollageInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “collage” */
    public string $type { set; get; }

    /** @var array<InputRichBlockInterface> $blocks Elements of the collage */
    public array $blocks { set; get; }

    /** @var RichBlockCaptionInterface|null $caption Optional. Caption of the block */
    public ?RichBlockCaptionInterface $caption { set; get; }
}
