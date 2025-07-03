<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\ReactionTypeEmojiInterface;
use Phenogram\Bindings\Types\ReactionTypeEmoji;

class ReactionTypeEmojiFactory extends AbstractFactory
{
    /**
     * Creates a new ReactionTypeEmoji instance with default fake data.
     *
     * @param string|null $type  Optional. Type of the reaction, always “emoji”
     * @param string|null $emoji Optional. Reaction emoji. Currently, it can be one of "❤", "👍", "👎", "🔥", "🥰", "👏", "😁", "🤔", "🤯", "😱", "🤬", "😢", "🎉", "🤩", "🤮", "💩", "🙏", "👌", "🕊", "🤡", "🥱", "🥴", "😍", "🐳", "❤‍🔥", "🌚", "🌭", "💯", "🤣", "⚡", "🍌", "🏆", "💔", "🤨", "😐", "🍓", "🍾", "💋", "🖕", "😈", "😴", "😭", "🤓", "👻", "👨‍💻", "👀", "🎃", "🙈", "😇", "😨", "🤝", "✍", "🤗", "🫡", "🎅", "🎄", "☃", "💅", "🤪", "🗿", "🆒", "💘", "🙉", "🦄", "😘", "💊", "🙊", "😎", "👾", "🤷‍♂", "🤷", "🤷‍♀", "😡"
     */
    public static function make(?string $type = null, ?string $emoji = null): ReactionTypeEmojiInterface
    {
        return self::factory()->makeReactionTypeEmoji(
            type: $type ?? self::fake()->word(),
            emoji: $emoji ?? self::fake()->text(50),
        );
    }
}
