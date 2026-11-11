<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\TextQuoteInterface;
use Phenogram\Bindings\Types\TextQuote;

class TextQuoteFactory extends AbstractFactory
{
    /**
     * Creates a new TextQuote instance with default fake data.
     *
     * @param string|null                                                                            $text      Optional. Text of the quoted part of a message that is replied to by the given message; may be empty if the quote was chosen from a rich message
     * @param array|null                                                                             $entities  Optional. Optional. Special entities that appear in the quote. Currently, only bold, italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities are kept in quotes.
     * @param array<\Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array<mixed>>|null $richTexts Optional. Optional. Rich text of the quote if it was chosen from a rich message. May contain only plain text, RichTextBold, RichTextItalic, RichTextUnderline, RichTextStrikethrough, RichTextSpoiler, RichTextSubscript, RichTextSuperscript, RichTextDateTime, RichTextCustomEmoji, RichTextMathematicalExpression, and arrays of them.
     * @param int|null                                                                               $position  Optional. Approximate quote position in the original message in UTF-16 code units as specified by the sender. For quotes from rich messages, it is the position in the text formed by joining plain texts of all quotable texts of the message, separated by line feeds.
     * @param bool|null                                                                              $isManual  Optional. Optional. True, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server.
     */
    public static function make(
        ?string $text = null,
        ?array $entities = null,
        ?array $richTexts = null,
        ?int $position = null,
        ?bool $isManual = null,
    ): TextQuoteInterface {
        return self::factory()->makeTextQuote(
            text: $text ?? self::fake()->sentence(),
            entities: $entities,
            richTexts: $richTexts,
            position: $position ?? self::fake()->randomNumber(),
            isManual: $isManual,
        );
    }
}
