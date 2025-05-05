<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineQueryResultVideo;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultVideoInterface;

class InlineQueryResultVideoFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQueryResultVideo instance with default fake data.
     *
     * @param string|null                                                            $type                  Optional. Type of the result, must be video
     * @param string|null                                                            $id                    Optional. Unique identifier for this result, 1-64 bytes
     * @param string|null                                                            $videoUrl              Optional. A valid URL for the embedded video player or video file
     * @param string|null                                                            $mimeType              Optional. MIME type of the content of the video URL, “text/html” or “video/mp4”
     * @param string|null                                                            $thumbnailUrl          Optional. URL of the thumbnail (JPEG only) for the video
     * @param string|null                                                            $title                 Optional. Title for the result
     * @param string|null                                                            $caption               Optional. Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
     * @param string|null                                                            $parseMode             Optional. Optional. Mode for parsing entities in the video caption. See formatting options for more details.
     * @param array|null                                                             $captionEntities       Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null                                                              $showCaptionAboveMedia Optional. Optional. Pass True, if the caption must be shown above the message media
     * @param int|null                                                               $videoWidth            Optional. Optional. Video width
     * @param int|null                                                               $videoHeight           Optional. Optional. Video height
     * @param int|null                                                               $videoDuration         Optional. Optional. Video duration in seconds
     * @param string|null                                                            $description           Optional. Optional. Short description of the result
     * @param InlineKeyboardMarkupInterface|null                                     $replyMarkup           Optional. Optional. Inline keyboard attached to the message
     * @param \Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface|null $inputMessageContent   Optional. Optional. Content of the message to be sent instead of the video. This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
     */
    public static function make(
        ?string $type = null,
        ?string $id = null,
        ?string $videoUrl = null,
        ?string $mimeType = null,
        ?string $thumbnailUrl = null,
        ?string $title = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?bool $showCaptionAboveMedia = null,
        ?int $videoWidth = null,
        ?int $videoHeight = null,
        ?int $videoDuration = null,
        ?string $description = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
        ?\Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface $inputMessageContent = null,
    ): InlineQueryResultVideoInterface {
        return self::factory()->makeInlineQueryResultVideo(
            type: $type ?? self::fake()->word(),
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            videoUrl: $videoUrl ?? self::fake()->url(),
            mimeType: $mimeType ?? self::fake()->text(50),
            thumbnailUrl: $thumbnailUrl ?? self::fake()->url(),
            title: $title ?? self::fake()->sentence(3),
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            videoWidth: $videoWidth,
            videoHeight: $videoHeight,
            videoDuration: $videoDuration,
            description: $description,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }
}
