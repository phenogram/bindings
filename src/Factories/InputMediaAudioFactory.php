<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputMediaAudio;
use Phenogram\Bindings\Types\Interfaces\InputMediaAudioInterface;

class InputMediaAudioFactory extends AbstractFactory
{
    /**
     * Creates a new InputMediaAudio instance with default fake data.
     *
     * @param string|null $type            Optional. Type of the result, must be audio
     * @param string|null $media           Optional. File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://” to upload a new one using multipart/form-data under  name. More information on Sending Files »
     * @param string|null $thumbnail       Optional. Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://” if the thumbnail was uploaded using multipart/form-data under . More information on Sending Files »
     * @param string|null $caption         Optional. Optional. Caption of the audio to be sent, 0-1024 characters after entities parsing
     * @param string|null $parseMode       Optional. Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
     * @param array|null  $captionEntities Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param int|null    $duration        Optional. Optional. Duration of the audio in seconds
     * @param string|null $performer       Optional. Optional. Performer of the audio
     * @param string|null $title           Optional. Optional. Title of the audio
     */
    public static function make(
        ?string $type = null,
        ?string $media = null,
        ?string $thumbnail = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?int $duration = null,
        ?string $performer = null,
        ?string $title = null,
    ): InputMediaAudioInterface {
        return self::factory()->makeInputMediaAudio(
            type: $type ?? self::fake()->word(),
            media: $media ?? self::fake()->text(50),
            thumbnail: $thumbnail,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            duration: $duration,
            performer: $performer,
            title: $title,
        );
    }
}
