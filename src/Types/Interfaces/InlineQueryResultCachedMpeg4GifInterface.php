<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound) stored on the Telegram servers. By default, this animated MPEG-4 file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 */
interface InlineQueryResultCachedMpeg4GifInterface extends TypeInterface
{
    /** @var string $type Type of the result, must be mpeg4_gif */
    public string $type { set; }

    /** @var string $id Unique identifier for this result, 1-64 bytes */
    public string $id { set; }

    /** @var string $mpeg4FileId A valid file identifier for the MPEG4 file */
    public string $mpeg4FileId { set; }

    /** @var string|null $title Optional. Title for the result */
    public ?string $title { set; }

    /** @var string|null $caption Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing */
    public ?string $caption { set; }

    /** @var string|null $parseMode Optional. Mode for parsing entities in the caption. See formatting options for more details. */
    public ?string $parseMode { set; }

    /** @var array<MessageEntityInterface>|null $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode */
    public ?array $captionEntities { set; }

    /** @var bool|null $showCaptionAboveMedia Optional. Pass True, if the caption must be shown above the message media */
    public ?bool $showCaptionAboveMedia { set; }

    /** @var InlineKeyboardMarkupInterface|null $replyMarkup Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkupInterface $replyMarkup { set; }

    /** @var InputMessageContentInterface|null $inputMessageContent Optional. Content of the message to be sent instead of the video animation */
    public ?InputMessageContentInterface $inputMessageContent { set; }
}
