<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\InputMediaVoiceNoteFactory as InputMediaVoiceNote;
use Phenogram\Bindings\Types\InputRichBlockVoiceNote;
use Phenogram\Bindings\Types\Interfaces\InputMediaVoiceNoteInterface;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockVoiceNoteInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

class InputRichBlockVoiceNoteFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockVoiceNote instance with default fake data.
     *
     * @param string|null                       $type      Optional. Type of the block, always “voice_note”
     * @param InputMediaVoiceNoteInterface|null $voiceNote Optional. The voice note. Caption is ignored.
     * @param RichBlockCaptionInterface|null    $caption   Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?InputMediaVoiceNoteInterface $voiceNote = null,
        ?RichBlockCaptionInterface $caption = null,
    ): InputRichBlockVoiceNoteInterface {
        return self::factory()->makeInputRichBlockVoiceNote(
            type: $type ?? self::fake()->word(),
            voiceNote: $voiceNote ?? InputMediaVoiceNote::make(),
            caption: $caption,
        );
    }
}
