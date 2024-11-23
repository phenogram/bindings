<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a link to a page containing an embedded video player or a video file. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 */
interface InlineQueryResultVideoInterface extends TypeInterface
{
	/** @var string $type Type of the result, must be video */
	public string $type { set; get; }

	/** @var string $id Unique identifier for this result, 1-64 bytes */
	public string $id { set; get; }

	/** @var string $videoUrl A valid URL for the embedded video player or video file */
	public string $videoUrl { set; get; }

	/** @var string $mimeType MIME type of the content of the video URL, “text/html” or “video/mp4” */
	public string $mimeType { set; get; }

	/** @var string $thumbnailUrl URL of the thumbnail (JPEG only) for the video */
	public string $thumbnailUrl { set; get; }

	/** @var string $title Title for the result */
	public string $title { set; get; }

	/** @var string|null $caption Optional. Caption of the video to be sent, 0-1024 characters after entities parsing */
	public ?string $caption { set; get; }

	/** @var string|null $parseMode Optional. Mode for parsing entities in the video caption. See formatting options for more details. */
	public ?string $parseMode { set; get; }

	/** @var array<MessageEntityInterface>|null $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode */
	public ?array $captionEntities { set; get; }

	/** @var bool|null $showCaptionAboveMedia Optional. Pass True, if the caption must be shown above the message media */
	public ?bool $showCaptionAboveMedia { set; get; }

	/** @var int|null $videoWidth Optional. Video width */
	public ?int $videoWidth { set; get; }

	/** @var int|null $videoHeight Optional. Video height */
	public ?int $videoHeight { set; get; }

	/** @var int|null $videoDuration Optional. Video duration in seconds */
	public ?int $videoDuration { set; get; }

	/** @var string|null $description Optional. Short description of the result */
	public ?string $description { set; get; }

	/** @var InlineKeyboardMarkupInterface|null $replyMarkup Optional. Inline keyboard attached to the message */
	public ?InlineKeyboardMarkupInterface $replyMarkup { set; get; }

	/** @var InputMessageContentInterface|null $inputMessageContent Optional. Content of the message to be sent instead of the video. This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video). */
	public ?InputMessageContentInterface $inputMessageContent { set; get; }
}
