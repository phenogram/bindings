<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ReactionTypeInterface;

/**
 * Describes a story area pointing to a suggested reaction. Currently, a story can have up to 5 suggested reaction areas.
 */
class StoryAreaTypeSuggestedReaction extends StoryAreaType implements Interfaces\StoryAreaTypeSuggestedReactionInterface
{
    /**
     * @param string                $type         Type of the area, always “suggested_reaction”
     * @param ReactionTypeInterface $reactionType Type of the reaction
     * @param bool|null             $isDark       Optional. Pass True if the reaction area has a dark background
     * @param bool|null             $isFlipped    Optional. Pass True if reaction area corner is flipped
     */
    public function __construct(
        public string $type,
        public ReactionTypeInterface $reactionType,
        public ?bool $isDark = null,
        public ?bool $isFlipped = null,
    ) {
    }
}
