<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\TextQuoteInterface;
use Phenogram\Bindings\Types\TextQuote;

class TextQuoteFactory extends AbstractFactory
{
    /**
     * Creates a new TextQuote instance with default fake data.
     *
     * @param string|null $text     Optional. Text of the quoted part of a message that is replied to by the given message
     * @param array|null  $entities Optional. Optional. Special entities that appear in the quote. Currently, only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are kept in quotes.
     * @param int|null    $position Optional. Approximate quote position in the original message in UTF-16 code units as specified by the sender
     * @param bool|null   $isManual Optional. Optional. True, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server.
     */
    public static function make(
        ?string $text = null,
        ?array $entities = null,
        ?int $position = null,
        ?bool $isManual = null,
    ): TextQuoteInterface {
        return self::factory()->makeTextQuote(
            text: $text ?? self::fake()->sentence(),
            entities: $entities,
            position: $position ?? self::fake()->randomNumber(),
            isManual: $isManual,
        );
    }
}
