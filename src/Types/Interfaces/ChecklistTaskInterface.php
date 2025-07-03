<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a task in a checklist.
 */
interface ChecklistTaskInterface extends TypeInterface
{
    /** @var int $id Unique identifier of the task */
    public int $id { set; get; }

    /** @var string $text Text of the task */
    public string $text { set; get; }

    /** @var array<MessageEntityInterface>|null $textEntities Optional. Special entities that appear in the task text */
    public ?array $textEntities { set; get; }

    /** @var UserInterface|null $completedByUser Optional. User that completed the task; omitted if the task wasn't completed */
    public ?UserInterface $completedByUser { set; get; }

    /** @var int|null $completionDate Optional. Point in time (Unix timestamp) when the task was completed; 0 if the task wasn't completed */
    public ?int $completionDate { set; get; }
}
