<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineQueryResultCachedDocument;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultCachedDocumentInterface;

class InlineQueryResultCachedDocumentFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQueryResultCachedDocument instance with default fake data.
     *
     * @param string|null                                                            $type                Optional. Type of the result, must be document
     * @param string|null                                                            $id                  Optional. Unique identifier for this result, 1-64 bytes
     * @param string|null                                                            $title               Optional. Title for the result
     * @param string|null                                                            $documentFileId      Optional. A valid file identifier for the file
     * @param string|null                                                            $description         Optional. Optional. Short description of the result
     * @param string|null                                                            $caption             Optional. Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
     * @param string|null                                                            $parseMode           Optional. Optional. Mode for parsing entities in the document caption. See formatting options for more details.
     * @param array|null                                                             $captionEntities     Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param InlineKeyboardMarkupInterface|null                                     $replyMarkup         Optional. Optional. Inline keyboard attached to the message
     * @param \Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface|null $inputMessageContent Optional. Optional. Content of the message to be sent instead of the file
     */
    public static function make(
        ?string $type = null,
        ?string $id = null,
        ?string $title = null,
        ?string $documentFileId = null,
        ?string $description = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
        ?\Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface $inputMessageContent = null,
    ): InlineQueryResultCachedDocumentInterface {
        return self::factory()->makeInlineQueryResultCachedDocument(
            type: $type ?? self::fake()->word(),
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            title: $title ?? self::fake()->sentence(3),
            documentFileId: $documentFileId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            description: $description,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }
}
