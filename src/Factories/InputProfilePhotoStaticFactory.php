<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputProfilePhotoStatic;
use Phenogram\Bindings\Types\Interfaces\InputProfilePhotoStaticInterface;

class InputProfilePhotoStaticFactory extends AbstractFactory
{
    /**
     * Creates a new InputProfilePhotoStatic instance with default fake data.
     *
     * @param string|null $type  Optional. Type of the profile photo, must be static
     * @param string|null $photo Optional. The static profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://” if the photo was uploaded using multipart/form-data under . More information on Sending Files »
     */
    public static function make(?string $type = null, ?string $photo = null): InputProfilePhotoStaticInterface
    {
        return self::factory()->makeInputProfilePhotoStatic(
            type: $type ?? self::fake()->word(),
            photo: $photo ?? self::fake()->text(50),
        );
    }
}
