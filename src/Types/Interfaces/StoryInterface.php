<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a story.
 */
interface StoryInterface extends TypeInterface
{
    /** @var ChatInterface $chat Chat that posted the story */
    public ChatInterface $chat { set; }

    /** @var int $id Unique identifier for the story in the chat */
    public int $id { set; }
}
