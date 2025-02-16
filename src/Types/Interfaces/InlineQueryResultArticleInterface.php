<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a link to an article or web page.
 */
interface InlineQueryResultArticleInterface extends TypeInterface
{
    /** @var string $type Type of the result, must be article */
    public string $type { set; }

    /** @var string $id Unique identifier for this result, 1-64 Bytes */
    public string $id { set; }

    /** @var string $title Title of the result */
    public string $title { set; }

    /** @var InputMessageContentInterface $inputMessageContent Content of the message to be sent */
    public InputMessageContentInterface $inputMessageContent { set; }

    /** @var InlineKeyboardMarkupInterface|null $replyMarkup Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkupInterface $replyMarkup { set; }

    /** @var string|null $url Optional. URL of the result */
    public ?string $url { set; }

    /** @var string|null $description Optional. Short description of the result */
    public ?string $description { set; }

    /** @var string|null $thumbnailUrl Optional. Url of the thumbnail for the result */
    public ?string $thumbnailUrl { set; }

    /** @var int|null $thumbnailWidth Optional. Thumbnail width */
    public ?int $thumbnailWidth { set; }

    /** @var int|null $thumbnailHeight Optional. Thumbnail height */
    public ?int $thumbnailHeight { set; }
}
