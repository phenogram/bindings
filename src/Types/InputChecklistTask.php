<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * Describes a task to add to a checklist.
 */
class InputChecklistTask implements Interfaces\InputChecklistTaskInterface
{
    /**
     * @param int                                $id           Unique identifier of the task; must be positive and unique among all task identifiers currently present in the checklist
     * @param string                             $text         Text of the task; 1-100 characters after entities parsing
     * @param string|null                        $parseMode    Optional. Mode for parsing entities in the text. See formatting options for more details.
     * @param array<MessageEntityInterface>|null $textEntities Optional. List of special entities that appear in the text, which can be specified instead of parse_mode. Currently, only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are allowed.
     */
    public function __construct(
        public int $id,
        public string $text,
        public ?string $parseMode = null,
        public ?array $textEntities = null,
    ) {
    }
}
