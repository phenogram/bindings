<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockSlideshowInterface;
use Phenogram\Bindings\Types\RichBlockSlideshow;

class RichBlockSlideshowFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockSlideshow instance with default fake data.
     *
     * @param string|null                    $type    Optional. Type of the block, always “slideshow”
     * @param array|null                     $blocks  Optional. Elements of the slideshow
     * @param RichBlockCaptionInterface|null $caption Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?array $blocks = null,
        ?RichBlockCaptionInterface $caption = null,
    ): RichBlockSlideshowInterface {
        return self::factory()->makeRichBlockSlideshow(
            type: $type ?? self::fake()->word(),
            blocks: $blocks ?? [],
            caption: $caption,
        );
    }
}
