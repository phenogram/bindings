<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputMediaAnimation;
use Phenogram\Bindings\Types\Interfaces\InputMediaAnimationInterface;

class InputMediaAnimationFactory extends AbstractFactory
{
    /**
     * Creates a new InputMediaAnimation instance with default fake data.
     *
     * @param string|null $type                  Optional. Type of the result, must be animation
     * @param string|null $media                 Optional. File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://” to upload a new one using multipart/form-data under  name. More information on Sending Files »
     * @param string|null $thumbnail             Optional. Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://” if the thumbnail was uploaded using multipart/form-data under . More information on Sending Files »
     * @param string|null $caption               Optional. Optional. Caption of the animation to be sent, 0-1024 characters after entities parsing
     * @param string|null $parseMode             Optional. Optional. Mode for parsing entities in the animation caption. See formatting options for more details.
     * @param array|null  $captionEntities       Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null   $showCaptionAboveMedia Optional. Optional. Pass True, if the caption must be shown above the message media
     * @param int|null    $width                 Optional. Optional. Animation width
     * @param int|null    $height                Optional. Optional. Animation height
     * @param int|null    $duration              Optional. Optional. Animation duration in seconds
     * @param bool|null   $hasSpoiler            Optional. Optional. Pass True if the animation needs to be covered with a spoiler animation
     */
    public static function make(
        ?string $type = null,
        ?string $media = null,
        ?string $thumbnail = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?bool $showCaptionAboveMedia = null,
        ?int $width = null,
        ?int $height = null,
        ?int $duration = null,
        ?bool $hasSpoiler = null,
    ): InputMediaAnimationInterface {
        return self::factory()->makeInputMediaAnimation(
            type: $type ?? self::fake()->word(),
            media: $media ?? self::fake()->text(50),
            thumbnail: $thumbnail,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            width: $width,
            height: $height,
            duration: $duration,
            hasSpoiler: $hasSpoiler,
        );
    }
}
