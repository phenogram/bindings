<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Factories\ReactionCountFactory as ReactionCount;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\MessageReactionCountUpdatedInterface;
use Phenogram\Bindings\Types\MessageReactionCountUpdated;

class MessageReactionCountUpdatedFactory extends AbstractFactory
{
    /**
     * Creates a new MessageReactionCountUpdated instance with default fake data.
     *
     * @param ChatInterface|null $chat      Optional. The chat containing the message
     * @param int|null           $messageId Optional. Unique message identifier inside the chat
     * @param int|null           $date      Optional. Date of the change in Unix time
     * @param array|null         $reactions Optional. List of reactions that are present on the message
     */
    public static function make(
        ?ChatInterface $chat = null,
        ?int $messageId = null,
        ?int $date = null,
        ?array $reactions = null,
    ): MessageReactionCountUpdatedInterface {
        return self::factory()->makeMessageReactionCountUpdated(
            chat: $chat ?? Chat::make(),
            messageId: $messageId ?? self::fake()->numberBetween(100000, 999999999),
            date: $date ?? self::fake()->unixTime(),
            reactions: $reactions ?? array_map(fn () => ReactionCount::make(), range(0, self::fake()->numberBetween(0, 2))),
        );
    }
}
