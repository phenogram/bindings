<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineQueryResultPhoto;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultPhotoInterface;

class InlineQueryResultPhotoFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQueryResultPhoto instance with default fake data.
     *
     * @param string|null                                                            $type                  Optional. Type of the result, must be photo
     * @param string|null                                                            $id                    Optional. Unique identifier for this result, 1-64 bytes
     * @param string|null                                                            $photoUrl              Optional. A valid URL of the photo. Photo must be in JPEG format. Photo size must not exceed 5MB
     * @param string|null                                                            $thumbnailUrl          Optional. URL of the thumbnail for the photo
     * @param int|null                                                               $photoWidth            Optional. Optional. Width of the photo
     * @param int|null                                                               $photoHeight           Optional. Optional. Height of the photo
     * @param string|null                                                            $title                 Optional. Optional. Title for the result
     * @param string|null                                                            $description           Optional. Optional. Short description of the result
     * @param string|null                                                            $caption               Optional. Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
     * @param string|null                                                            $parseMode             Optional. Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
     * @param array|null                                                             $captionEntities       Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null                                                              $showCaptionAboveMedia Optional. Optional. Pass True, if the caption must be shown above the message media
     * @param InlineKeyboardMarkupInterface|null                                     $replyMarkup           Optional. Optional. Inline keyboard attached to the message
     * @param \Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface|null $inputMessageContent   Optional. Optional. Content of the message to be sent instead of the photo
     */
    public static function make(
        ?string $type = null,
        ?string $id = null,
        ?string $photoUrl = null,
        ?string $thumbnailUrl = null,
        ?int $photoWidth = null,
        ?int $photoHeight = null,
        ?string $title = null,
        ?string $description = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?bool $showCaptionAboveMedia = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
        ?\Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface $inputMessageContent = null,
    ): InlineQueryResultPhotoInterface {
        return self::factory()->makeInlineQueryResultPhoto(
            type: $type ?? self::fake()->word(),
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            photoUrl: $photoUrl ?? self::fake()->url(),
            thumbnailUrl: $thumbnailUrl ?? self::fake()->url(),
            photoWidth: $photoWidth,
            photoHeight: $photoHeight,
            title: $title,
            description: $description,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }
}
