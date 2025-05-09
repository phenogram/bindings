<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * This object contains information about one answer option in a poll to be sent.
 */
class InputPollOption implements Interfaces\InputPollOptionInterface
{
    /**
     * @param string                             $text          Option text, 1-100 characters
     * @param string|null                        $textParseMode Optional. Mode for parsing entities in the text. See formatting options for more details. Currently, only custom emoji entities are allowed
     * @param array<MessageEntityInterface>|null $textEntities  Optional. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of text_parse_mode
     */
    public function __construct(
        public string $text,
        public ?string $textParseMode = null,
        public ?array $textEntities = null,
    ) {
    }
}
