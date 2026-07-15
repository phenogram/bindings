<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\VoiceFactory as Voice;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockVoiceNoteInterface;
use Phenogram\Bindings\Types\Interfaces\VoiceInterface;
use Phenogram\Bindings\Types\RichBlockVoiceNote;

class RichBlockVoiceNoteFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockVoiceNote instance with default fake data.
     *
     * @param string|null                    $type      Optional. Type of the block, always “voice_note”
     * @param VoiceInterface|null            $voiceNote Optional. The voice note
     * @param RichBlockCaptionInterface|null $caption   Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?VoiceInterface $voiceNote = null,
        ?RichBlockCaptionInterface $caption = null,
    ): RichBlockVoiceNoteInterface {
        return self::factory()->makeRichBlockVoiceNote(
            type: $type ?? self::fake()->word(),
            voiceNote: $voiceNote ?? Voice::make(),
            caption: $caption,
        );
    }
}
