<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A slideshow, corresponding to the custom HTML tag <tg-slideshow>.
 */
interface RichBlockSlideshowInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “slideshow” */
    public string $type { set; get; }

    /** @var array<RichBlockInterface> $blocks Elements of the slideshow */
    public array $blocks { set; get; }

    /** @var RichBlockCaptionInterface|null $caption Optional. Caption of the block */
    public ?RichBlockCaptionInterface $caption { set; get; }
}
