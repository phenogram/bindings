<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineQueryResultArticle;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultArticleInterface;

class InlineQueryResultArticleFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQueryResultArticle instance with default fake data.
     *
     * @param string|null                                                            $type                Optional. Type of the result, must be article
     * @param string|null                                                            $id                  Optional. Unique identifier for this result, 1-64 Bytes
     * @param string|null                                                            $title               Optional. Title of the result
     * @param \Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface|null $inputMessageContent Optional. Content of the message to be sent
     * @param InlineKeyboardMarkupInterface|null                                     $replyMarkup         Optional. Optional. Inline keyboard attached to the message
     * @param string|null                                                            $url                 Optional. Optional. URL of the result
     * @param string|null                                                            $description         Optional. Optional. Short description of the result
     * @param string|null                                                            $thumbnailUrl        Optional. Optional. Url of the thumbnail for the result
     * @param int|null                                                               $thumbnailWidth      Optional. Optional. Thumbnail width
     * @param int|null                                                               $thumbnailHeight     Optional. Optional. Thumbnail height
     */
    public static function make(
        ?string $type = null,
        ?string $id = null,
        ?string $title = null,
        ?\Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface $inputMessageContent = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
        ?string $url = null,
        ?string $description = null,
        ?string $thumbnailUrl = null,
        ?int $thumbnailWidth = null,
        ?int $thumbnailHeight = null,
    ): InlineQueryResultArticleInterface {
        return self::factory()->makeInlineQueryResultArticle(
            type: $type ?? self::fake()->word(),
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            title: $title ?? self::fake()->sentence(3),
            inputMessageContent: $inputMessageContent ?? '[Abstract type: InputMessageContent]',
            replyMarkup: $replyMarkup,
            url: $url,
            description: $description,
            thumbnailUrl: $thumbnailUrl,
            thumbnailWidth: $thumbnailWidth,
            thumbnailHeight: $thumbnailHeight,
        );
    }
}
