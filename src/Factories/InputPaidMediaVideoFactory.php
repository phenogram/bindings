<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputPaidMediaVideo;
use Phenogram\Bindings\Types\Interfaces\InputPaidMediaVideoInterface;

class InputPaidMediaVideoFactory extends AbstractFactory
{
    /**
     * Creates a new InputPaidMediaVideo instance with default fake data.
     *
     * @param string|null $type              Optional. Type of the media, must be video
     * @param string|null $media             Optional. File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://” to upload a new one using multipart/form-data under  name. More information on Sending Files »
     * @param string|null $thumbnail         Optional. Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://” if the thumbnail was uploaded using multipart/form-data under . More information on Sending Files »
     * @param string|null $cover             Optional. Optional. Cover for the video in the message. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://” to upload a new one using multipart/form-data under  name. More information on Sending Files »
     * @param int|null    $startTimestamp    Optional. Optional. Start timestamp for the video in the message
     * @param int|null    $width             Optional. Optional. Video width
     * @param int|null    $height            Optional. Optional. Video height
     * @param int|null    $duration          Optional. Optional. Video duration in seconds
     * @param bool|null   $supportsStreaming Optional. Optional. Pass True if the uploaded video is suitable for streaming
     */
    public static function make(
        ?string $type = null,
        ?string $media = null,
        ?string $thumbnail = null,
        ?string $cover = null,
        ?int $startTimestamp = null,
        ?int $width = null,
        ?int $height = null,
        ?int $duration = null,
        ?bool $supportsStreaming = null,
    ): InputPaidMediaVideoInterface {
        return self::factory()->makeInputPaidMediaVideo(
            type: $type ?? self::fake()->word(),
            media: $media ?? self::fake()->text(50),
            thumbnail: $thumbnail,
            cover: $cover,
            startTimestamp: $startTimestamp,
            width: $width,
            height: $height,
            duration: $duration,
            supportsStreaming: $supportsStreaming,
        );
    }
}
