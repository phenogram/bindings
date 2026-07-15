<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputRichBlockCollage;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockCollageInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

class InputRichBlockCollageFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockCollage instance with default fake data.
     *
     * @param string|null                    $type    Optional. Type of the block, always “collage”
     * @param array|null                     $blocks  Optional. Elements of the collage
     * @param RichBlockCaptionInterface|null $caption Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?array $blocks = null,
        ?RichBlockCaptionInterface $caption = null,
    ): InputRichBlockCollageInterface {
        return self::factory()->makeInputRichBlockCollage(
            type: $type ?? self::fake()->word(),
            blocks: $blocks ?? [],
            caption: $caption,
        );
    }
}
