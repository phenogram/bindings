<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InputMediaAudioInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

/**
 * A block with a music file, corresponding to the HTML tag <audio>.
 */
class InputRichBlockAudio extends InputRichBlock implements Interfaces\InputRichBlockAudioInterface
{
    /**
     * @param string                         $type    Type of the block, always “audio”
     * @param InputMediaAudioInterface       $audio   The audio. Caption is ignored.
     * @param RichBlockCaptionInterface|null $caption Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public InputMediaAudioInterface $audio,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
