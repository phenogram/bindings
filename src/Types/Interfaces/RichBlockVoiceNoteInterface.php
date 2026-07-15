<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block with a voice note, corresponding to the HTML tag <audio>.
 */
interface RichBlockVoiceNoteInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “voice_note” */
    public string $type { set; get; }

    /** @var VoiceInterface $voiceNote The voice note */
    public VoiceInterface $voiceNote { set; get; }

    /** @var RichBlockCaptionInterface|null $caption Optional. Caption of the block */
    public ?RichBlockCaptionInterface $caption { set; get; }
}
