<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a task to add to a checklist.
 */
interface InputChecklistTaskInterface extends TypeInterface
{
    /** @var int $id Unique identifier of the task; must be positive and unique among all task identifiers currently present in the checklist */
    public int $id { set; get; }

    /** @var string $text Text of the task; 1-100 characters after entities parsing */
    public string $text { set; get; }

    /** @var string|null $parseMode Optional. Mode for parsing entities in the text. See formatting options for more details. */
    public ?string $parseMode { set; get; }

    /** @var array<MessageEntityInterface>|null $textEntities Optional. List of special entities that appear in the text, which can be specified instead of parse_mode. Currently, only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are allowed. */
    public ?array $textEntities { set; get; }
}
