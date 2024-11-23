<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents the content of a text message to be sent as the result of an inline query.
 */
interface InputTextMessageContentInterface extends TypeInterface
{
	/** @var string $messageText Text of the message to be sent, 1-4096 characters */
	public string $messageText { set; get; }

	/** @var string|null $parseMode Optional. Mode for parsing entities in the message text. See formatting options for more details. */
	public ?string $parseMode { set; get; }

	/** @var array<MessageEntityInterface>|null $entities Optional. List of special entities that appear in message text, which can be specified instead of parse_mode */
	public ?array $entities { set; get; }

	/** @var LinkPreviewOptionsInterface|null $linkPreviewOptions Optional. Link preview generation options for the message */
	public ?LinkPreviewOptionsInterface $linkPreviewOptions { set; get; }
}
