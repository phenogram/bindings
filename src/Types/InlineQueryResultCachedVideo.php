<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * Represents a link to a video file stored on the Telegram servers. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 */
class InlineQueryResultCachedVideo extends InlineQueryResult implements Interfaces\InlineQueryResultCachedVideoInterface
{
    /**
     * @param string                             $id                    Unique identifier for this result, 1-64 bytes
     * @param string                             $videoFileId           A valid file identifier for the video file
     * @param string                             $title                 Title for the result
     * @param string                             $type                  Type of the result, must be video
     * @param string|null                        $description           Optional. Short description of the result
     * @param string|null                        $caption               Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
     * @param string|null                        $parseMode             Optional. Mode for parsing entities in the video caption. See formatting options for more details.
     * @param array<MessageEntityInterface>|null $captionEntities       Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null                          $showCaptionAboveMedia Optional. Pass True, if the caption must be shown above the message media
     * @param InlineKeyboardMarkupInterface|null $replyMarkup           Optional. Inline keyboard attached to the message
     * @param InputMessageContentInterface|null  $inputMessageContent   Optional. Content of the message to be sent instead of the video
     */
    public function __construct(
        public string $id,
        public string $videoFileId,
        public string $title,
        public string $type = 'video',
        public ?string $description = null,
        public ?string $caption = null,
        public ?string $parseMode = null,
        public ?array $captionEntities = null,
        public ?bool $showCaptionAboveMedia = null,
        public ?InlineKeyboardMarkupInterface $replyMarkup = null,
        public ?InputMessageContentInterface $inputMessageContent = null,
    ) {
    }
}
