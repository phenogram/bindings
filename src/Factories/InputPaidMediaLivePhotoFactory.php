<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputPaidMediaLivePhoto;
use Phenogram\Bindings\Types\Interfaces\InputPaidMediaLivePhotoInterface;

class InputPaidMediaLivePhotoFactory extends AbstractFactory
{
    /**
     * Creates a new InputPaidMediaLivePhoto instance with default fake data.
     *
     * @param string|null $type  Optional. Type of the media, must be live_photo
     * @param string|null $media Optional. Video of the live photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or pass “attach://” to upload a new one using multipart/form-data under  name. More information on Sending Files ». Sending live photos by a URL is currently unsupported.
     * @param string|null $photo Optional. The static photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or pass “attach://” to upload a new one using multipart/form-data under  name. More information on Sending Files ». Sending live photos by a URL is currently unsupported.
     */
    public static function make(
        ?string $type = null,
        ?string $media = null,
        ?string $photo = null,
    ): InputPaidMediaLivePhotoInterface {
        return self::factory()->makeInputPaidMediaLivePhoto(
            type: $type ?? self::fake()->word(),
            media: $media ?? self::fake()->text(50),
            photo: $photo ?? self::fake()->text(50),
        );
    }
}
