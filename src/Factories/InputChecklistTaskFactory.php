<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputChecklistTask;
use Phenogram\Bindings\Types\Interfaces\InputChecklistTaskInterface;

class InputChecklistTaskFactory extends AbstractFactory
{
    /**
     * Creates a new InputChecklistTask instance with default fake data.
     *
     * @param int|null    $id           Optional. Unique identifier of the task; must be positive and unique among all task identifiers currently present in the checklist
     * @param string|null $text         Optional. Text of the task; 1-100 characters after entities parsing
     * @param string|null $parseMode    Optional. Optional. Mode for parsing entities in the text. See formatting options for more details.
     * @param array|null  $textEntities Optional. Optional. List of special entities that appear in the text, which can be specified instead of parse_mode. Currently, only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are allowed.
     */
    public static function make(
        ?int $id = null,
        ?string $text = null,
        ?string $parseMode = null,
        ?array $textEntities = null,
    ): InputChecklistTaskInterface {
        return self::factory()->makeInputChecklistTask(
            id: $id ?? self::fake()->numberBetween(100000, 999999999),
            text: $text ?? self::fake()->sentence(),
            parseMode: $parseMode,
            textEntities: $textEntities,
        );
    }
}
