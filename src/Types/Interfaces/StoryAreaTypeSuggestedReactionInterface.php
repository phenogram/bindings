<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a story area pointing to a suggested reaction. Currently, a story can have up to 5 suggested reaction areas.
 */
interface StoryAreaTypeSuggestedReactionInterface extends TypeInterface
{
    /** @var string $type Type of the area, always “suggested_reaction” */
    public string $type { set; }

    /** @var ReactionTypeInterface $reactionType Type of the reaction */
    public ReactionTypeInterface $reactionType { set; }

    /** @var bool|null $isDark Optional. Pass True if the reaction area has a dark background */
    public ?bool $isDark { set; }

    /** @var bool|null $isFlipped Optional. Pass True if reaction area corner is flipped */
    public ?bool $isFlipped { set; }
}
