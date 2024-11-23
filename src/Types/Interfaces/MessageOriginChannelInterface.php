<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The message was originally sent to a channel chat.
 */
interface MessageOriginChannelInterface extends TypeInterface
{
	/** @var string $type Type of the message origin, always “channel” */
	public string $type { set; get; }

	/** @var int $date Date the message was sent originally in Unix time */
	public int $date { set; get; }

	/** @var ChatInterface $chat Channel chat to which the message was originally sent */
	public ChatInterface $chat { set; get; }

	/** @var int $messageId Unique message identifier inside the chat */
	public int $messageId { set; get; }

	/** @var string|null $authorSignature Optional. Signature of the original post author */
	public ?string $authorSignature { set; get; }
}
