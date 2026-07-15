<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block with an animation, corresponding to the HTML tag <video>.
 */
interface RichBlockAnimationInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “animation” */
    public string $type { set; get; }

    /** @var AnimationInterface $animation The animation */
    public AnimationInterface $animation { set; get; }

    /** @var bool|null $hasSpoiler Optional. True, if the media preview is covered by a spoiler animation */
    public ?bool $hasSpoiler { set; get; }

    /** @var RichBlockCaptionInterface|null $caption Optional. Caption of the block */
    public ?RichBlockCaptionInterface $caption { set; get; }
}
