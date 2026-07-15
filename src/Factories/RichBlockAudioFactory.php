<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\AudioFactory as Audio;
use Phenogram\Bindings\Types\Interfaces\AudioInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockAudioInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;
use Phenogram\Bindings\Types\RichBlockAudio;

class RichBlockAudioFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockAudio instance with default fake data.
     *
     * @param string|null                    $type    Optional. Type of the block, always “audio”
     * @param AudioInterface|null            $audio   Optional. The audio
     * @param RichBlockCaptionInterface|null $caption Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?AudioInterface $audio = null,
        ?RichBlockCaptionInterface $caption = null,
    ): RichBlockAudioInterface {
        return self::factory()->makeRichBlockAudio(
            type: $type ?? self::fake()->word(),
            audio: $audio ?? Audio::make(),
            caption: $caption,
        );
    }
}
