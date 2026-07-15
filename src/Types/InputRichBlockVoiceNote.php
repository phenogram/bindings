<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InputMediaVoiceNoteInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

/**
 * A block with a voice note, corresponding to the HTML tag <audio>.
 */
class InputRichBlockVoiceNote extends InputRichBlock implements Interfaces\InputRichBlockVoiceNoteInterface
{
    /**
     * @param string                         $type      Type of the block, always “voice_note”
     * @param InputMediaVoiceNoteInterface   $voiceNote The voice note. Caption is ignored.
     * @param RichBlockCaptionInterface|null $caption   Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public InputMediaVoiceNoteInterface $voiceNote,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
