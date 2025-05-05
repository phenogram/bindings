<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineQueryResultDocument;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultDocumentInterface;

class InlineQueryResultDocumentFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQueryResultDocument instance with default fake data.
     *
     * @param string|null                                                            $type                Optional. Type of the result, must be document
     * @param string|null                                                            $id                  Optional. Unique identifier for this result, 1-64 bytes
     * @param string|null                                                            $title               Optional. Title for the result
     * @param string|null                                                            $caption             Optional. Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
     * @param string|null                                                            $parseMode           Optional. Optional. Mode for parsing entities in the document caption. See formatting options for more details.
     * @param array|null                                                             $captionEntities     Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param string|null                                                            $documentUrl         Optional. A valid URL for the file
     * @param string|null                                                            $mimeType            Optional. MIME type of the content of the file, either “application/pdf” or “application/zip”
     * @param string|null                                                            $description         Optional. Optional. Short description of the result
     * @param InlineKeyboardMarkupInterface|null                                     $replyMarkup         Optional. Optional. Inline keyboard attached to the message
     * @param \Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface|null $inputMessageContent Optional. Optional. Content of the message to be sent instead of the file
     * @param string|null                                                            $thumbnailUrl        Optional. Optional. URL of the thumbnail (JPEG only) for the file
     * @param int|null                                                               $thumbnailWidth      Optional. Optional. Thumbnail width
     * @param int|null                                                               $thumbnailHeight     Optional. Optional. Thumbnail height
     */
    public static function make(
        ?string $type = null,
        ?string $id = null,
        ?string $title = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?string $documentUrl = null,
        ?string $mimeType = null,
        ?string $description = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
        ?\Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface $inputMessageContent = null,
        ?string $thumbnailUrl = null,
        ?int $thumbnailWidth = null,
        ?int $thumbnailHeight = null,
    ): InlineQueryResultDocumentInterface {
        return self::factory()->makeInlineQueryResultDocument(
            type: $type ?? self::fake()->word(),
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            title: $title ?? self::fake()->sentence(3),
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            documentUrl: $documentUrl ?? self::fake()->url(),
            mimeType: $mimeType ?? self::fake()->text(50),
            description: $description,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
            thumbnailUrl: $thumbnailUrl,
            thumbnailWidth: $thumbnailWidth,
            thumbnailHeight: $thumbnailHeight,
        );
    }
}
