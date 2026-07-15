<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;
use Phenogram\Bindings\Types\Interfaces\VoiceInterface;

/**
 * A block with a voice note, corresponding to the HTML tag <audio>.
 */
class RichBlockVoiceNote extends RichBlock implements Interfaces\RichBlockVoiceNoteInterface
{
    /**
     * @param string                         $type      Type of the block, always “voice_note”
     * @param VoiceInterface                 $voiceNote The voice note
     * @param RichBlockCaptionInterface|null $caption   Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public VoiceInterface $voiceNote,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
