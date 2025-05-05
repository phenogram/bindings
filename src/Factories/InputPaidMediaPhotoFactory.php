<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputPaidMediaPhoto;
use Phenogram\Bindings\Types\Interfaces\InputPaidMediaPhotoInterface;

class InputPaidMediaPhotoFactory extends AbstractFactory
{
    /**
     * Creates a new InputPaidMediaPhoto instance with default fake data.
     *
     * @param string|null $type  Optional. Type of the media, must be photo
     * @param string|null $media Optional. File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://” to upload a new one using multipart/form-data under  name. More information on Sending Files »
     */
    public static function make(?string $type = null, ?string $media = null): InputPaidMediaPhotoInterface
    {
        return self::factory()->makeInputPaidMediaPhoto(
            type: $type ?? self::fake()->word(),
            media: $media ?? self::fake()->text(50),
        );
    }
}
