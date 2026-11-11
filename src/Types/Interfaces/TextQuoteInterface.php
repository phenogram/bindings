<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about the quoted part of a message that is replied to by the given message.
 */
interface TextQuoteInterface extends TypeInterface
{
    /** @var string $text Text of the quoted part of a message that is replied to by the given message; may be empty if the quote was chosen from a rich message */
    public string $text { set; get; }

    /** @var array<MessageEntityInterface>|null $entities Optional. Special entities that appear in the quote. Currently, only bold, italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities are kept in quotes. */
    public ?array $entities { set; get; }

    /** @var array<RichTextInterface|string|array<mixed>>|null $richTexts Optional. Rich text of the quote if it was chosen from a rich message. May contain only plain text, RichTextBold, RichTextItalic, RichTextUnderline, RichTextStrikethrough, RichTextSpoiler, RichTextSubscript, RichTextSuperscript, RichTextDateTime, RichTextCustomEmoji, RichTextMathematicalExpression, and arrays of them. */
    public ?array $richTexts { set; get; }

    /** @var int $position Approximate quote position in the original message in UTF-16 code units as specified by the sender. For quotes from rich messages, it is the position in the text formed by joining plain texts of all quotable texts of the message, separated by line feeds. */
    public int $position { set; get; }

    /** @var bool|null $isManual Optional. True, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server. */
    public ?bool $isManual { set; get; }
}
