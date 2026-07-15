<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\InputMediaAudioFactory as InputMediaAudio;
use Phenogram\Bindings\Types\InputRichBlockAudio;
use Phenogram\Bindings\Types\Interfaces\InputMediaAudioInterface;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockAudioInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

class InputRichBlockAudioFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockAudio instance with default fake data.
     *
     * @param string|null                    $type    Optional. Type of the block, always “audio”
     * @param InputMediaAudioInterface|null  $audio   Optional. The audio. Caption is ignored.
     * @param RichBlockCaptionInterface|null $caption Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?InputMediaAudioInterface $audio = null,
        ?RichBlockCaptionInterface $caption = null,
    ): InputRichBlockAudioInterface {
        return self::factory()->makeInputRichBlockAudio(
            type: $type ?? self::fake()->word(),
            audio: $audio ?? InputMediaAudio::make(),
            caption: $caption,
        );
    }
}
