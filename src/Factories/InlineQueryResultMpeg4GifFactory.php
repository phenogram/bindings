<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineQueryResultMpeg4Gif;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultMpeg4GifInterface;

class InlineQueryResultMpeg4GifFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQueryResultMpeg4Gif instance with default fake data.
     *
     * @param string|null                                                            $type                  Optional. Type of the result, must be mpeg4_gif
     * @param string|null                                                            $id                    Optional. Unique identifier for this result, 1-64 bytes
     * @param string|null                                                            $mpeg4Url              Optional. A valid URL for the MPEG4 file
     * @param int|null                                                               $mpeg4Width            Optional. Optional. Video width
     * @param int|null                                                               $mpeg4Height           Optional. Optional. Video height
     * @param int|null                                                               $mpeg4Duration         Optional. Optional. Video duration in seconds
     * @param string|null                                                            $thumbnailUrl          Optional. URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     * @param string|null                                                            $thumbnailMimeType     Optional. Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
     * @param string|null                                                            $title                 Optional. Optional. Title for the result
     * @param string|null                                                            $caption               Optional. Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
     * @param string|null                                                            $parseMode             Optional. Optional. Mode for parsing entities in the caption. See formatting options for more details.
     * @param array|null                                                             $captionEntities       Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null                                                              $showCaptionAboveMedia Optional. Optional. Pass True, if the caption must be shown above the message media
     * @param InlineKeyboardMarkupInterface|null                                     $replyMarkup           Optional. Optional. Inline keyboard attached to the message
     * @param \Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface|null $inputMessageContent   Optional. Optional. Content of the message to be sent instead of the video animation
     */
    public static function make(
        ?string $type = null,
        ?string $id = null,
        ?string $mpeg4Url = null,
        ?int $mpeg4Width = null,
        ?int $mpeg4Height = null,
        ?int $mpeg4Duration = null,
        ?string $thumbnailUrl = null,
        ?string $thumbnailMimeType = null,
        ?string $title = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?bool $showCaptionAboveMedia = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
        ?\Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface $inputMessageContent = null,
    ): InlineQueryResultMpeg4GifInterface {
        return self::factory()->makeInlineQueryResultMpeg4Gif(
            type: $type ?? self::fake()->word(),
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            mpeg4Url: $mpeg4Url ?? self::fake()->url(),
            mpeg4Width: $mpeg4Width,
            mpeg4Height: $mpeg4Height,
            mpeg4Duration: $mpeg4Duration,
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
