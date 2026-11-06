<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextMentionInterface;
use Phenogram\Bindings\Types\RichTextMention;

class RichTextMentionFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextMention instance with default fake data.
     *
     * @param string|null                                                              $type     Optional. Type of the rich text, always “mention”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text     Optional. The text
     * @param string|null                                                              $username Optional. The username
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
        ?string $username = null,
    ): RichTextMentionInterface {
        return self::factory()->makeRichTextMention(
            type: $type ?? 'mention',
            text: $text ?? self::fake()->sentence(),
            username: $username ?? self::fake()->userName(),
        );
    }
}
