<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block with a music file, corresponding to the HTML tag <audio>.
 */
interface RichBlockAudioInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “audio” */
    public string $type { set; get; }

    /** @var AudioInterface $audio The audio */
    public AudioInterface $audio { set; get; }

    /** @var RichBlockCaptionInterface|null $caption Optional. Caption of the block */
    public ?RichBlockCaptionInterface $caption { set; get; }
}
