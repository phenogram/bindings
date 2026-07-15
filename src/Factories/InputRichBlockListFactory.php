<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\InputRichBlockListItemFactory as InputRichBlockListItem;
use Phenogram\Bindings\Types\InputRichBlockList;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockListInterface;

class InputRichBlockListFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockList instance with default fake data.
     *
     * @param string|null $type  Optional. Type of the block, always “list”
     * @param array|null  $items Optional. Items of the list
     */
    public static function make(?string $type = null, ?array $items = null): InputRichBlockListInterface
    {
        return self::factory()->makeInputRichBlockList(
            type: $type ?? self::fake()->word(),
            items: $items ?? array_map(fn () => InputRichBlockListItem::make(), range(0, self::fake()->numberBetween(0, 2))),
        );
    }
}
