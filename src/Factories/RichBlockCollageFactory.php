<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCollageInterface;
use Phenogram\Bindings\Types\RichBlockCollage;

class RichBlockCollageFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockCollage instance with default fake data.
     *
     * @param string|null                    $type    Optional. Type of the block, always “collage”
     * @param array|null                     $blocks  Optional. Elements of the collage
     * @param RichBlockCaptionInterface|null $caption Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?array $blocks = null,
        ?RichBlockCaptionInterface $caption = null,
    ): RichBlockCollageInterface {
        return self::factory()->makeRichBlockCollage(
            type: $type ?? self::fake()->word(),
            blocks: $blocks ?? [],
            caption: $caption,
        );
    }
}
