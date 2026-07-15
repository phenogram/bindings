<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block with a music file, corresponding to the HTML tag <audio>.
 */
interface InputRichBlockAudioInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “audio” */
    public string $type { set; get; }

    /** @var InputMediaAudioInterface $audio The audio. Caption is ignored. */
    public InputMediaAudioInterface $audio { set; get; }

    /** @var RichBlockCaptionInterface|null $caption Optional. Caption of the block */
    public ?RichBlockCaptionInterface $caption { set; get; }
}
