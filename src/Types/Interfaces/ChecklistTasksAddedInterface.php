<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about tasks added to a checklist.
 */
interface ChecklistTasksAddedInterface extends TypeInterface
{
    /** @var MessageInterface|null $checklistMessage Optional. Message containing the checklist to which the tasks were added. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply. */
    public ?MessageInterface $checklistMessage { set; get; }

    /** @var array<ChecklistTaskInterface> $tasks List of tasks added to the checklist */
    public array $tasks { set; get; }
}
