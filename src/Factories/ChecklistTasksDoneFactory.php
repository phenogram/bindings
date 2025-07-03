<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\MessageFactory as Message;
use Phenogram\Bindings\Types\ChecklistTasksDone;
use Phenogram\Bindings\Types\Interfaces\ChecklistTasksDoneInterface;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;

class ChecklistTasksDoneFactory extends AbstractFactory
{
    /**
     * Creates a new ChecklistTasksDone instance with default fake data.
     *
     * @param MessageInterface|null $checklistMessage       Optional. Optional. Message containing the checklist whose tasks were marked as done or not done. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param array|null            $markedAsDoneTaskIds    Optional. Optional. Identifiers of the tasks that were marked as done
     * @param array|null            $markedAsNotDoneTaskIds Optional. Optional. Identifiers of the tasks that were marked as not done
     */
    public static function make(
        ?MessageInterface $checklistMessage = null,
        ?array $markedAsDoneTaskIds = null,
        ?array $markedAsNotDoneTaskIds = null,
    ): ChecklistTasksDoneInterface {
        return self::factory()->makeChecklistTasksDone(
            checklistMessage: $checklistMessage,
            markedAsDoneTaskIds: $markedAsDoneTaskIds,
            markedAsNotDoneTaskIds: $markedAsNotDoneTaskIds,
        );
    }
}
