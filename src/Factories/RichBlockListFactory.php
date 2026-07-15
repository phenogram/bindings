<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\RichBlockListItemFactory as RichBlockListItem;
use Phenogram\Bindings\Types\Interfaces\RichBlockListInterface;
use Phenogram\Bindings\Types\RichBlockList;

class RichBlockListFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockList instance with default fake data.
     *
     * @param string|null $type  Optional. Type of the block, always “list”
     * @param array|null  $items Optional. Items of the list
     */
    public static function make(?string $type = null, ?array $items = null): RichBlockListInterface
    {
        return self::factory()->makeRichBlockList(
            type: $type ?? self::fake()->word(),
            items: $items ?? array_map(fn () => RichBlockListItem::make(), range(0, self::fake()->numberBetween(0, 2))),
        );
    }
}
