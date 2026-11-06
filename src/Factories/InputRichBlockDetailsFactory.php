<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputRichBlockDetails;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockDetailsInterface;

class InputRichBlockDetailsFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockDetails instance with default fake data.
     *
     * @param string|null                                                              $type    Optional. Type of the block, always “details”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $summary Optional. Always shown summary of the block
     * @param array|null                                                               $blocks  Optional. Content of the block
     * @param bool|null                                                                $isOpen  Optional. Optional. Pass True if the content of the block is visible by default
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $summary = null,
        ?array $blocks = null,
        ?bool $isOpen = null,
    ): InputRichBlockDetailsInterface {
        return self::factory()->makeInputRichBlockDetails(
            type: $type ?? 'details',
            summary: $summary ?? self::fake()->sentence(),
            blocks: $blocks ?? [],
            isOpen: $isOpen,
        );
    }
}
