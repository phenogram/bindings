<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\AudioInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

/**
 * A block with a music file, corresponding to the HTML tag <audio>.
 */
class RichBlockAudio extends RichBlock implements Interfaces\RichBlockAudioInterface
{
    /**
     * @param string                         $type    Type of the block, always “audio”
     * @param AudioInterface                 $audio   The audio
     * @param RichBlockCaptionInterface|null $caption Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public AudioInterface $audio,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
