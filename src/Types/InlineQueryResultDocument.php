<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * Represents a link to a file. By default, this file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the file. Currently, only .PDF and .ZIP files can be sent using this method.
 */
class InlineQueryResultDocument extends InlineQueryResult implements Interfaces\InlineQueryResultDocumentInterface
{
    /**
     * @param string                             $id                  Unique identifier for this result, 1-64 bytes
     * @param string                             $title               Title for the result
     * @param string                             $documentUrl         A valid URL for the file
     * @param string                             $mimeType            MIME type of the content of the file, either “application/pdf” or “application/zip”
     * @param string                             $type                Type of the result, must be document
     * @param string|null                        $caption             Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
     * @param string|null                        $parseMode           Optional. Mode for parsing entities in the document caption. See formatting options for more details.
     * @param array<MessageEntityInterface>|null $captionEntities     Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param string|null                        $description         Optional. Short description of the result
     * @param InlineKeyboardMarkupInterface|null $replyMarkup         Optional. Inline keyboard attached to the message
     * @param InputMessageContentInterface|null  $inputMessageContent Optional. Content of the message to be sent instead of the file
     * @param string|null                        $thumbnailUrl        Optional. URL of the thumbnail (JPEG only) for the file
     * @param int|null                           $thumbnailWidth      Optional. Thumbnail width
     * @param int|null                           $thumbnailHeight     Optional. Thumbnail height
     */
    public function __construct(
        public string $id,
        public string $title,
        public string $documentUrl,
        public string $mimeType,
        public string $type = 'document',
        public ?string $caption = null,
        public ?string $parseMode = null,
        public ?array $captionEntities = null,
        public ?string $description = null,
        public ?InlineKeyboardMarkupInterface $replyMarkup = null,
        public ?InputMessageContentInterface $inputMessageContent = null,
        public ?string $thumbnailUrl = null,
        public ?int $thumbnailWidth = null,
        public ?int $thumbnailHeight = null,
    ) {
    }
}
