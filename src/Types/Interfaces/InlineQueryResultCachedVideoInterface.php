<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a link to a video file stored on the Telegram servers. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 */
interface InlineQueryResultCachedVideoInterface extends TypeInterface
{
    /** @var string $type Type of the result, must be video */
    public string $type { set; }

    /** @var string $id Unique identifier for this result, 1-64 bytes */
    public string $id { set; }

    /** @var string $videoFileId A valid file identifier for the video file */
    public string $videoFileId { set; }

    /** @var string $title Title for the result */
    public string $title { set; }

    /** @var string|null $description Optional. Short description of the result */
    public ?string $description { set; }

    /** @var string|null $caption Optional. Caption of the video to be sent, 0-1024 characters after entities parsing */
    public ?string $caption { set; }

    /** @var string|null $parseMode Optional. Mode for parsing entities in the video caption. See formatting options for more details. */
    public ?string $parseMode { set; }

    /** @var array<MessageEntityInterface>|null $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode */
    public ?array $captionEntities { set; }

    /** @var bool|null $showCaptionAboveMedia Optional. Pass True, if the caption must be shown above the message media */
    public ?bool $showCaptionAboveMedia { set; }

    /** @var InlineKeyboardMarkupInterface|null $replyMarkup Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkupInterface $replyMarkup { set; }

    /** @var InputMessageContentInterface|null $inputMessageContent Optional. Content of the message to be sent instead of the video */
    public ?InputMessageContentInterface $inputMessageContent { set; }
}
