<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\MessageReactionUpdatedInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\MessageReactionUpdated;

class MessageReactionUpdatedFactory extends AbstractFactory
{
    /**
     * Creates a new MessageReactionUpdated instance with default fake data.
     *
     * @param ChatInterface|null $chat        Optional. The chat containing the message the user reacted to
     * @param int|null           $messageId   Optional. Unique identifier of the message inside the chat
     * @param UserInterface|null $user        Optional. Optional. The user that changed the reaction, if the user isn't anonymous
     * @param ChatInterface|null $actorChat   Optional. Optional. The chat on behalf of which the reaction was changed, if the user is anonymous
     * @param int|null           $date        Optional. Date of the change in Unix time
     * @param array|null         $oldReaction Optional. Previous list of reaction types that were set by the user
     * @param array|null         $newReaction Optional. New list of reaction types that have been set by the user
     */
    public static function make(
        ?ChatInterface $chat = null,
        ?int $messageId = null,
        ?UserInterface $user = null,
        ?ChatInterface $actorChat = null,
        ?int $date = null,
        ?array $oldReaction = null,
        ?array $newReaction = null,
    ): MessageReactionUpdatedInterface {
        return self::factory()->makeMessageReactionUpdated(
            chat: $chat ?? Chat::make(),
            messageId: $messageId ?? self::fake()->numberBetween(100000, 999999999),
            user: $user,
            actorChat: $actorChat,
            date: $date ?? self::fake()->unixTime(),
            oldReaction: $oldReaction ?? [],
            newReaction: $newReaction ?? [],
        );
    }
}
