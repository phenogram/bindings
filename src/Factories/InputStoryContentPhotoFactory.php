<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputStoryContentPhoto;
use Phenogram\Bindings\Types\Interfaces\InputStoryContentPhotoInterface;

class InputStoryContentPhotoFactory extends AbstractFactory
{
    /**
     * Creates a new InputStoryContentPhoto instance with default fake data.
     *
     * @param string|null $type  Optional. Type of the content, must be photo
     * @param string|null $photo Optional. The photo to post as a story. The photo must be of the size 1080x1920 and must not exceed 10 MB. The photo can't be reused and can only be uploaded as a new file, so you can pass “attach://” if the photo was uploaded using multipart/form-data under . More information on Sending Files »
     */
    public static function make(?string $type = null, ?string $photo = null): InputStoryContentPhotoInterface
    {
        return self::factory()->makeInputStoryContentPhoto(
            type: $type ?? self::fake()->word(),
            photo: $photo ?? self::fake()->text(50),
        );
    }
}
