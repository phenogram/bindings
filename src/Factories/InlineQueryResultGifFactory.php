<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineQueryResultGif;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultGifInterface;

class InlineQueryResultGifFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQueryResultGif instance with default fake data.
     *
     * @param string|null                                                            $type                  Optional. Type of the result, must be gif
     * @param string|null                                                            $id                    Optional. Unique identifier for this result, 1-64 bytes
     * @param string|null                                                            $gifUrl                Optional. A valid URL for the GIF file
     * @param int|null                                                               $gifWidth              Optional. Optional. Width of the GIF
     * @param int|null                                                               $gifHeight             Optional. Optional. Height of the GIF
     * @param int|null                                                               $gifDuration           Optional. Optional. Duration of the GIF in seconds
     * @param string|null                                                            $thumbnailUrl          Optional. URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     * @param string|null                                                            $thumbnailMimeType     Optional. Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
     * @param string|null                                                            $title                 Optional. Optional. Title for the result
     * @param string|null                                                            $caption               Optional. Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
     * @param string|null                                                            $parseMode             Optional. Optional. Mode for parsing entities in the caption. See formatting options for more details.
     * @param array|null                                                             $captionEntities       Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null                                                              $showCaptionAboveMedia Optional. Optional. Pass True, if the caption must be shown above the message media
     * @param InlineKeyboardMarkupInterface|null                                     $replyMarkup           Optional. Optional. Inline keyboard attached to the message
     * @param \Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface|null $inputMessageContent   Optional. Optional. Content of the message to be sent instead of the GIF animation
     */
    public static function make(
        ?string $type = null,
        ?string $id = null,
        ?string $gifUrl = null,
        ?int $gifWidth = null,
        ?int $gifHeight = null,
        ?int $gifDuration = null,
        ?string $thumbnailUrl = null,
        ?string $thumbnailMimeType = null,
        ?string $title = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?bool $showCaptionAboveMedia = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
        ?\Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface $inputMessageContent = null,
    ): InlineQueryResultGifInterface {
        return self::factory()->makeInlineQueryResultGif(
            type: $type ?? self::fake()->word(),
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            gifUrl: $gifUrl ?? self::fake()->url(),
            gifWidth: $gifWidth,
            gifHeight: $gifHeight,
            gifDuration: $gifDuration,
            thumbnailUrl: $thumbnailUrl ?? self::fake()->url(),
            thumbnailMimeType: $thumbnailMimeType,
            title: $title,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }
}
