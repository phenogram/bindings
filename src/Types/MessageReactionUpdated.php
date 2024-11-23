<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\ReactionTypeInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * This object represents a change of a reaction on a message performed by a user.
 */
class MessageReactionUpdated implements Interfaces\MessageReactionUpdatedInterface
{
    /**
     * @param ChatInterface                $chat        The chat containing the message the user reacted to
     * @param int                          $messageId   Unique identifier of the message inside the chat
     * @param int                          $date        Date of the change in Unix time
     * @param array<ReactionTypeInterface> $oldReaction Previous list of reaction types that were set by the user
     * @param array<ReactionTypeInterface> $newReaction New list of reaction types that have been set by the user
     * @param UserInterface|null           $user        Optional. The user that changed the reaction, if the user isn't anonymous
     * @param ChatInterface|null           $actorChat   Optional. The chat on behalf of which the reaction was changed, if the user is anonymous
     */
    public function __construct(
        public ChatInterface $chat,
        public int $messageId,
        public int $date,
        public array $oldReaction,
        public array $newReaction,
        public ?UserInterface $user = null,
        public ?ChatInterface $actorChat = null,
    ) {
    }
}
