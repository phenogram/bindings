<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a link to a file. By default, this file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the file. Currently, only .PDF and .ZIP files can be sent using this method.
 */
interface InlineQueryResultDocumentInterface extends TypeInterface
{
	/** @var string $type Type of the result, must be document */
	public string $type { set; get; }

	/** @var string $id Unique identifier for this result, 1-64 bytes */
	public string $id { set; get; }

	/** @var string $title Title for the result */
	public string $title { set; get; }

	/** @var string|null $caption Optional. Caption of the document to be sent, 0-1024 characters after entities parsing */
	public ?string $caption { set; get; }

	/** @var string|null $parseMode Optional. Mode for parsing entities in the document caption. See formatting options for more details. */
	public ?string $parseMode { set; get; }

	/** @var array<MessageEntityInterface>|null $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode */
	public ?array $captionEntities { set; get; }

	/** @var string $documentUrl A valid URL for the file */
	public string $documentUrl { set; get; }

	/** @var string $mimeType MIME type of the content of the file, either “application/pdf” or “application/zip” */
	public string $mimeType { set; get; }

	/** @var string|null $description Optional. Short description of the result */
	public ?string $description { set; get; }

	/** @var InlineKeyboardMarkupInterface|null $replyMarkup Optional. Inline keyboard attached to the message */
	public ?InlineKeyboardMarkupInterface $replyMarkup { set; get; }

	/** @var InputMessageContentInterface|null $inputMessageContent Optional. Content of the message to be sent instead of the file */
	public ?InputMessageContentInterface $inputMessageContent { set; get; }

	/** @var string|null $thumbnailUrl Optional. URL of the thumbnail (JPEG only) for the file */
	public ?string $thumbnailUrl { set; get; }

	/** @var int|null $thumbnailWidth Optional. Thumbnail width */
	public ?int $thumbnailWidth { set; get; }

	/** @var int|null $thumbnailHeight Optional. Thumbnail height */
	public ?int $thumbnailHeight { set; get; }
}
