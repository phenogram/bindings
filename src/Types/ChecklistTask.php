<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Describes a task in a checklist.
 */
class ChecklistTask implements Interfaces\ChecklistTaskInterface
{
    /**
     * @param int                                $id              Unique identifier of the task
     * @param string                             $text            Text of the task
     * @param array<MessageEntityInterface>|null $textEntities    Optional. Special entities that appear in the task text
     * @param UserInterface|null                 $completedByUser Optional. User that completed the task; omitted if the task wasn't completed by a user
     * @param ChatInterface|null                 $completedByChat Optional. Chat that completed the task; omitted if the task wasn't completed by a chat
     * @param int|null                           $completionDate  Optional. Point in time (Unix timestamp) when the task was completed; 0 if the task wasn't completed
     */
    public function __construct(
        public int $id,
        public string $text,
        public ?array $textEntities = null,
        public ?UserInterface $completedByUser = null,
        public ?ChatInterface $completedByChat = null,
        public ?int $completionDate = null,
    ) {
    }
}
