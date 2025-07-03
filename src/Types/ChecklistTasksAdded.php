<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChecklistTaskInterface;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;

/**
 * Describes a service message about tasks added to a checklist.
 */
class ChecklistTasksAdded implements Interfaces\ChecklistTasksAddedInterface
{
    /**
     * @param array<ChecklistTaskInterface> $tasks            List of tasks added to the checklist
     * @param MessageInterface|null         $checklistMessage Optional. Message containing the checklist to which the tasks were added. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     */
    public function __construct(
        public array $tasks,
        public ?MessageInterface $checklistMessage = null,
    ) {
    }
}
