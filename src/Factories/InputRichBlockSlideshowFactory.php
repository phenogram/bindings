<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputRichBlockSlideshow;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockSlideshowInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

class InputRichBlockSlideshowFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockSlideshow instance with default fake data.
     *
     * @param string|null                    $type    Optional. Type of the block, always “slideshow”
     * @param array|null                     $blocks  Optional. Elements of the slideshow
     * @param RichBlockCaptionInterface|null $caption Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?array $blocks = null,
        ?RichBlockCaptionInterface $caption = null,
    ): InputRichBlockSlideshowInterface {
        return self::factory()->makeInputRichBlockSlideshow(
            type: $type ?? self::fake()->word(),
            blocks: $blocks ?? [],
            caption: $caption,
        );
    }
}
