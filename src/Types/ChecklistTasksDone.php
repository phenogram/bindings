<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MessageInterface;

/**
 * Describes a service message about checklist tasks marked as done or not done.
 */
class ChecklistTasksDone implements Interfaces\ChecklistTasksDoneInterface
{
    /**
     * @param MessageInterface|null $checklistMessage       Optional. Message containing the checklist whose tasks were marked as done or not done. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param array<int>|null       $markedAsDoneTaskIds    Optional. Identifiers of the tasks that were marked as done
     * @param array<int>|null       $markedAsNotDoneTaskIds Optional. Identifiers of the tasks that were marked as not done
     */
    public function __construct(
        public ?MessageInterface $checklistMessage = null,
        public ?array $markedAsDoneTaskIds = null,
        public ?array $markedAsNotDoneTaskIds = null,
    ) {
    }
}
