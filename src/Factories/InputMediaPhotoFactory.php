<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputMediaPhoto;
use Phenogram\Bindings\Types\Interfaces\InputMediaPhotoInterface;

class InputMediaPhotoFactory extends AbstractFactory
{
    /**
     * Creates a new InputMediaPhoto instance with default fake data.
     *
     * @param string|null $type                  Optional. Type of the result, must be photo
     * @param string|null $media                 Optional. File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://” to upload a new one using multipart/form-data under  name. More information on Sending Files »
     * @param string|null $caption               Optional. Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
     * @param string|null $parseMode             Optional. Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
     * @param array|null  $captionEntities       Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null   $showCaptionAboveMedia Optional. Optional. Pass True, if the caption must be shown above the message media
     * @param bool|null   $hasSpoiler            Optional. Optional. Pass True if the photo needs to be covered with a spoiler animation
     */
    public static function make(
        ?string $type = null,
        ?string $media = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?bool $showCaptionAboveMedia = null,
        ?bool $hasSpoiler = null,
    ): InputMediaPhotoInterface {
        return self::factory()->makeInputMediaPhoto(
            type: $type ?? self::fake()->word(),
            media: $media ?? self::fake()->text(50),
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            hasSpoiler: $hasSpoiler,
        );
    }
}
