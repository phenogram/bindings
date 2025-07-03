<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a checklist to create.
 */
interface InputChecklistInterface extends TypeInterface
{
    /** @var string $title Title of the checklist; 1-255 characters after entities parsing */
    public string $title { set; get; }

    /** @var string|null $parseMode Optional. Mode for parsing entities in the title. See formatting options for more details. */
    public ?string $parseMode { set; get; }

    /** @var array<MessageEntityInterface>|null $titleEntities Optional. List of special entities that appear in the title, which can be specified instead of parse_mode. Currently, only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are allowed. */
    public ?array $titleEntities { set; get; }

    /** @var array<InputChecklistTaskInterface> $tasks List of 1-30 tasks in the checklist */
    public array $tasks { set; get; }

    /** @var bool|null $othersCanAddTasks Optional. Pass True if other users can add tasks to the checklist */
    public ?bool $othersCanAddTasks { set; get; }

    /** @var bool|null $othersCanMarkTasksAsDone Optional. Pass True if other users can mark tasks as done or not done in the checklist */
    public ?bool $othersCanMarkTasksAsDone { set; get; }
}
