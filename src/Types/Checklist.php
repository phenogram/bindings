<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChecklistTaskInterface;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * Describes a checklist.
 */
class Checklist implements Interfaces\ChecklistInterface
{
    /**
     * @param string                             $title                    Title of the checklist
     * @param array<ChecklistTaskInterface>      $tasks                    List of tasks in the checklist
     * @param array<MessageEntityInterface>|null $titleEntities            Optional. Special entities that appear in the checklist title
     * @param bool|null                          $othersCanAddTasks        Optional. True, if users other than the creator of the list can add tasks to the list
     * @param bool|null                          $othersCanMarkTasksAsDone Optional. True, if users other than the creator of the list can mark tasks as done or not done
     */
    public function __construct(
        public string $title,
        public array $tasks,
        public ?array $titleEntities = null,
        public ?bool $othersCanAddTasks = null,
        public ?bool $othersCanMarkTasksAsDone = null,
    ) {
    }
}
