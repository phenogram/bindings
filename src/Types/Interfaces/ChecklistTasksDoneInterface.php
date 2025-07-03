<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about checklist tasks marked as done or not done.
 */
interface ChecklistTasksDoneInterface extends TypeInterface
{
    /** @var MessageInterface|null $checklistMessage Optional. Message containing the checklist whose tasks were marked as done or not done. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply. */
    public ?MessageInterface $checklistMessage { set; get; }

    /** @var array<int>|null $markedAsDoneTaskIds Optional. Identifiers of the tasks that were marked as done */
    public ?array $markedAsDoneTaskIds { set; get; }

    /** @var array<int>|null $markedAsNotDoneTaskIds Optional. Identifiers of the tasks that were marked as not done */
    public ?array $markedAsNotDoneTaskIds { set; get; }
}
