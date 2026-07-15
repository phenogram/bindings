<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block with an animation, corresponding to the HTML tag <video>.
 */
interface InputRichBlockAnimationInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “animation” */
    public string $type { set; get; }

    /** @var InputMediaAnimationInterface $animation The animation. Caption is ignored. */
    public InputMediaAnimationInterface $animation { set; get; }

    /** @var RichBlockCaptionInterface|null $caption Optional. Caption of the block */
    public ?RichBlockCaptionInterface $caption { set; get; }
}
