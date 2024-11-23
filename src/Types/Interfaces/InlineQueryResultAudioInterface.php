<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a link to an MP3 audio file. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 */
interface InlineQueryResultAudioInterface extends TypeInterface
{
	/** @var string $type Type of the result, must be audio */
	public string $type { set; get; }

	/** @var string $id Unique identifier for this result, 1-64 bytes */
	public string $id { set; get; }

	/** @var string $audioUrl A valid URL for the audio file */
	public string $audioUrl { set; get; }

	/** @var string $title Title */
	public string $title { set; get; }

	/** @var string|null $caption Optional. Caption, 0-1024 characters after entities parsing */
	public ?string $caption { set; get; }

	/** @var string|null $parseMode Optional. Mode for parsing entities in the audio caption. See formatting options for more details. */
	public ?string $parseMode { set; get; }

	/** @var array<MessageEntityInterface>|null $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode */
	public ?array $captionEntities { set; get; }

	/** @var string|null $performer Optional. Performer */
	public ?string $performer { set; get; }

	/** @var int|null $audioDuration Optional. Audio duration in seconds */
	public ?int $audioDuration { set; get; }

	/** @var InlineKeyboardMarkupInterface|null $replyMarkup Optional. Inline keyboard attached to the message */
	public ?InlineKeyboardMarkupInterface $replyMarkup { set; get; }

	/** @var InputMessageContentInterface|null $inputMessageContent Optional. Content of the message to be sent instead of the audio */
	public ?InputMessageContentInterface $inputMessageContent { set; get; }
}
