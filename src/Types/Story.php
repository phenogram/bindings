<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;

/**
 * This object represents a story.
 */
class Story implements Interfaces\StoryInterface
{
    /**
     * @param ChatInterface $chat Chat that posted the story
     * @param int           $id   Unique identifier for the story in the chat
     */
    public function __construct(
        public ChatInterface $chat,
        public int $id,
    ) {
    }
}
