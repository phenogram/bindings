<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\InputMediaAnimationFactory as InputMediaAnimation;
use Phenogram\Bindings\Types\InputRichBlockAnimation;
use Phenogram\Bindings\Types\Interfaces\InputMediaAnimationInterface;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockAnimationInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

class InputRichBlockAnimationFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockAnimation instance with default fake data.
     *
     * @param string|null                       $type      Optional. Type of the block, always “animation”
     * @param InputMediaAnimationInterface|null $animation Optional. The animation. Caption is ignored.
     * @param RichBlockCaptionInterface|null    $caption   Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?InputMediaAnimationInterface $animation = null,
        ?RichBlockCaptionInterface $caption = null,
    ): InputRichBlockAnimationInterface {
        return self::factory()->makeInputRichBlockAnimation(
            type: $type ?? self::fake()->word(),
            animation: $animation ?? InputMediaAnimation::make(),
            caption: $caption,
        );
    }
}
