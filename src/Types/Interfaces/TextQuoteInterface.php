<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about the quoted part of a message that is replied to by the given message.
 */
interface TextQuoteInterface extends TypeInterface
{
    /** @var string $text Text of the quoted part of a message that is replied to by the given message */
    public string $text { set; }

    /** @var array<MessageEntityInterface>|null $entities Optional. Special entities that appear in the quote. Currently, only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are kept in quotes. */
    public ?array $entities { set; }

    /** @var int $position Approximate quote position in the original message in UTF-16 code units as specified by the sender */
    public int $position { set; }

    /** @var bool|null $isManual Optional. True, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server. */
    public ?bool $isManual { set; }
}
