<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Upon receiving a message with this object, Telegram clients will display a reply interface to the user (act as if the user has selected the bot's message and tapped 'Reply'). This can be extremely useful if you want to create user-friendly step-by-step interfaces without having to sacrifice privacy mode. Not supported in channels and for messages sent on behalf of a Telegram Business account.
 */
interface ForceReplyInterface extends TypeInterface
{
	/** @var bool $forceReply Shows reply interface to the user, as if they manually selected the bot's message and tapped 'Reply' */
	public bool $forceReply { set; get; }

	/** @var string|null $inputFieldPlaceholder Optional. The placeholder to be shown in the input field when the reply is active; 1-64 characters */
	public ?string $inputFieldPlaceholder { set; get; }

	/** @var bool|null $selective Optional. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply to a message in the same chat and forum topic, sender of the original message. */
	public ?bool $selective { set; get; }
}
