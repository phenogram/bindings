<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChecklistTaskFactory as ChecklistTask;
use Phenogram\Bindings\Types\Checklist;
use Phenogram\Bindings\Types\Interfaces\ChecklistInterface;

class ChecklistFactory extends AbstractFactory
{
    /**
     * Creates a new Checklist instance with default fake data.
     *
     * @param string|null $title                    Optional. Title of the checklist
     * @param array|null  $titleEntities            Optional. Optional. Special entities that appear in the checklist title
     * @param array|null  $tasks                    Optional. List of tasks in the checklist
     * @param bool|null   $othersCanAddTasks        Optional. Optional. True, if users other than the creator of the list can add tasks to the list
     * @param bool|null   $othersCanMarkTasksAsDone Optional. Optional. True, if users other than the creator of the list can mark tasks as done or not done
     */
    public static function make(
        ?string $title = null,
        ?array $titleEntities = null,
        ?array $tasks = null,
        ?bool $othersCanAddTasks = null,
        ?bool $othersCanMarkTasksAsDone = null,
    ): ChecklistInterface {
        return self::factory()->makeChecklist(
            title: $title ?? self::fake()->sentence(3),
            titleEntities: $titleEntities,
            tasks: $tasks ?? array_map(fn () => ChecklistTask::make(), range(0, self::fake()->numberBetween(0, 2))),
            othersCanAddTasks: $othersCanAddTasks,
            othersCanMarkTasksAsDone: $othersCanMarkTasksAsDone,
        );
    }
}
