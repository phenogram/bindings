<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\StoryAreaTypeSuggestedReactionInterface;
use Phenogram\Bindings\Types\StoryAreaTypeSuggestedReaction;

class StoryAreaTypeSuggestedReactionFactory extends AbstractFactory
{
    /**
     * Creates a new StoryAreaTypeSuggestedReaction instance with default fake data.
     *
     * @param string|null                                                     $type         Optional. Type of the area, always “suggested_reaction”
     * @param \Phenogram\Bindings\Types\Interfaces\ReactionTypeInterface|null $reactionType Optional. Type of the reaction
     * @param bool|null                                                       $isDark       Optional. Optional. Pass True if the reaction area has a dark background
     * @param bool|null                                                       $isFlipped    Optional. Optional. Pass True if reaction area corner is flipped
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\ReactionTypeInterface $reactionType = null,
        ?bool $isDark = null,
        ?bool $isFlipped = null,
    ): StoryAreaTypeSuggestedReactionInterface {
        return self::factory()->makeStoryAreaTypeSuggestedReaction(
            type: $type ?? self::fake()->word(),
            reactionType: $reactionType ?? '[Abstract type: ReactionType]',
            isDark: $isDark,
            isFlipped: $isFlipped,
        );
    }
}
