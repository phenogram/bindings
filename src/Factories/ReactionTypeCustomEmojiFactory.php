<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\ReactionTypeCustomEmojiInterface;
use Phenogram\Bindings\Types\ReactionTypeCustomEmoji;

class ReactionTypeCustomEmojiFactory extends AbstractFactory
{
    /**
     * Creates a new ReactionTypeCustomEmoji instance with default fake data.
     *
     * @param string|null $type          Optional. Type of the reaction, always “custom_emoji”
     * @param string|null $customEmojiId Optional. Custom emoji identifier
     */
    public static function make(?string $type = null, ?string $customEmojiId = null): ReactionTypeCustomEmojiInterface
    {
        return self::factory()->makeReactionTypeCustomEmoji(
            type: $type ?? self::fake()->word(),
            customEmojiId: $customEmojiId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
        );
    }
}
