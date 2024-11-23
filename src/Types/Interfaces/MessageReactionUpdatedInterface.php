<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a change of a reaction on a message performed by a user.
 */
interface MessageReactionUpdatedInterface extends TypeInterface
{
	/** @var ChatInterface $chat The chat containing the message the user reacted to */
	public ChatInterface $chat { set; get; }

	/** @var int $messageId Unique identifier of the message inside the chat */
	public int $messageId { set; get; }

	/** @var UserInterface|null $user Optional. The user that changed the reaction, if the user isn't anonymous */
	public ?UserInterface $user { set; get; }

	/** @var ChatInterface|null $actorChat Optional. The chat on behalf of which the reaction was changed, if the user is anonymous */
	public ?ChatInterface $actorChat { set; get; }

	/** @var int $date Date of the change in Unix time */
	public int $date { set; get; }

	/** @var array<ReactionTypeInterface> $oldReaction Previous list of reaction types that were set by the user */
	public array $oldReaction { set; get; }

	/** @var array<ReactionTypeInterface> $newReaction New list of reaction types that have been set by the user */
	public array $newReaction { set; get; }
}
