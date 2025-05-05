<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\StoryInterface;
use Phenogram\Bindings\Types\Story;

class StoryFactory extends AbstractFactory
{
    /**
     * Creates a new Story instance with default fake data.
     *
     * @param ChatInterface|null $chat Optional. Chat that posted the story
     * @param int|null           $id   Optional. Unique identifier for the story in the chat
     */
    public static function make(?ChatInterface $chat = null, ?int $id = null): StoryInterface
    {
        return self::factory()->makeStory(
            chat: $chat ?? Chat::make(),
            id: $id ?? self::fake()->numberBetween(100000, 999999999),
        );
    }
}
