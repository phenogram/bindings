<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InputChecklistTaskInterface;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * Describes a checklist to create.
 */
class InputChecklist implements Interfaces\InputChecklistInterface
{
    /**
     * @param string                             $title                    Title of the checklist; 1-255 characters after entities parsing
     * @param array<InputChecklistTaskInterface> $tasks                    List of 1-30 tasks in the checklist
     * @param string|null                        $parseMode                Optional. Mode for parsing entities in the title. See formatting options for more details.
     * @param array<MessageEntityInterface>|null $titleEntities            Optional. List of special entities that appear in the title, which can be specified instead of parse_mode. Currently, only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are allowed.
     * @param bool|null                          $othersCanAddTasks        Optional. Pass True if other users can add tasks to the checklist
     * @param bool|null                          $othersCanMarkTasksAsDone Optional. Pass True if other users can mark tasks as done or not done in the checklist
     */
    public function __construct(
        public string $title,
        public array $tasks,
        public ?string $parseMode = null,
        public ?array $titleEntities = null,
        public ?bool $othersCanAddTasks = null,
        public ?bool $othersCanMarkTasksAsDone = null,
    ) {
    }
}
