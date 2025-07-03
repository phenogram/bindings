<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChecklistTaskFactory as ChecklistTask;
use Phenogram\Bindings\Factories\MessageFactory as Message;
use Phenogram\Bindings\Types\ChecklistTasksAdded;
use Phenogram\Bindings\Types\Interfaces\ChecklistTasksAddedInterface;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;

class ChecklistTasksAddedFactory extends AbstractFactory
{
    /**
     * Creates a new ChecklistTasksAdded instance with default fake data.
     *
     * @param MessageInterface|null $checklistMessage Optional. Optional. Message containing the checklist to which the tasks were added. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param array|null            $tasks            Optional. List of tasks added to the checklist
     */
    public static function make(
        ?MessageInterface $checklistMessage = null,
        ?array $tasks = null,
    ): ChecklistTasksAddedInterface {
        return self::factory()->makeChecklistTasksAdded(
            checklistMessage: $checklistMessage,
            tasks: $tasks ?? array_map(fn () => ChecklistTask::make(), range(0, self::fake()->numberBetween(0, 2))),
        );
    }
}
