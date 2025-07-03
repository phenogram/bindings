<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\InputChecklistTaskFactory as InputChecklistTask;
use Phenogram\Bindings\Types\InputChecklist;
use Phenogram\Bindings\Types\Interfaces\InputChecklistInterface;

class InputChecklistFactory extends AbstractFactory
{
    /**
     * Creates a new InputChecklist instance with default fake data.
     *
     * @param string|null $title                    Optional. Title of the checklist; 1-255 characters after entities parsing
     * @param string|null $parseMode                Optional. Optional. Mode for parsing entities in the title. See formatting options for more details.
     * @param array|null  $titleEntities            Optional. Optional. List of special entities that appear in the title, which can be specified instead of parse_mode. Currently, only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are allowed.
     * @param array|null  $tasks                    Optional. List of 1-30 tasks in the checklist
     * @param bool|null   $othersCanAddTasks        Optional. Optional. Pass True if other users can add tasks to the checklist
     * @param bool|null   $othersCanMarkTasksAsDone Optional. Optional. Pass True if other users can mark tasks as done or not done in the checklist
     */
    public static function make(
        ?string $title = null,
        ?string $parseMode = null,
        ?array $titleEntities = null,
        ?array $tasks = null,
        ?bool $othersCanAddTasks = null,
        ?bool $othersCanMarkTasksAsDone = null,
    ): InputChecklistInterface {
        return self::factory()->makeInputChecklist(
            title: $title ?? self::fake()->sentence(3),
            parseMode: $parseMode,
            titleEntities: $titleEntities,
            tasks: $tasks ?? array_map(fn () => InputChecklistTask::make(), range(0, self::fake()->numberBetween(0, 2))),
            othersCanAddTasks: $othersCanAddTasks,
            othersCanMarkTasksAsDone: $othersCanMarkTasksAsDone,
        );
    }
}
