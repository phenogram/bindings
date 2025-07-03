<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a checklist.
 */
interface ChecklistInterface extends TypeInterface
{
    /** @var string $title Title of the checklist */
    public string $title { set; get; }

    /** @var array<MessageEntityInterface>|null $titleEntities Optional. Special entities that appear in the checklist title */
    public ?array $titleEntities { set; get; }

    /** @var array<ChecklistTaskInterface> $tasks List of tasks in the checklist */
    public array $tasks { set; get; }

    /** @var bool|null $othersCanAddTasks Optional. True, if users other than the creator of the list can add tasks to the list */
    public ?bool $othersCanAddTasks { set; get; }

    /** @var bool|null $othersCanMarkTasksAsDone Optional. True, if users other than the creator of the list can mark tasks as done or not done */
    public ?bool $othersCanMarkTasksAsDone { set; get; }
}
