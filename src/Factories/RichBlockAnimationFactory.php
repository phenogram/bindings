<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\AnimationFactory as Animation;
use Phenogram\Bindings\Types\Interfaces\AnimationInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockAnimationInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;
use Phenogram\Bindings\Types\RichBlockAnimation;

class RichBlockAnimationFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockAnimation instance with default fake data.
     *
     * @param string|null                    $type       Optional. Type of the block, always “animation”
     * @param AnimationInterface|null        $animation  Optional. The animation
     * @param bool|null                      $hasSpoiler Optional. Optional. True, if the media preview is covered by a spoiler animation
     * @param RichBlockCaptionInterface|null $caption    Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?AnimationInterface $animation = null,
        ?bool $hasSpoiler = null,
        ?RichBlockCaptionInterface $caption = null,
    ): RichBlockAnimationInterface {
        return self::factory()->makeRichBlockAnimation(
            type: $type ?? self::fake()->word(),
            animation: $animation ?? Animation::make(),
            hasSpoiler: $hasSpoiler,
            caption: $caption,
        );
    }
}
