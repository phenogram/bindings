<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputProfilePhotoAnimated;
use Phenogram\Bindings\Types\Interfaces\InputProfilePhotoAnimatedInterface;

class InputProfilePhotoAnimatedFactory extends AbstractFactory
{
    /**
     * Creates a new InputProfilePhotoAnimated instance with default fake data.
     *
     * @param string|null $type               Optional. Type of the profile photo, must be animated
     * @param string|null $animation          Optional. The animated profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://” if the photo was uploaded using multipart/form-data under . More information on Sending Files »
     * @param float|null  $mainFrameTimestamp Optional. Optional. Timestamp in seconds of the frame that will be used as the static profile photo. Defaults to 0.0.
     */
    public static function make(
        ?string $type = null,
        ?string $animation = null,
        ?float $mainFrameTimestamp = null,
    ): InputProfilePhotoAnimatedInterface {
        return self::factory()->makeInputProfilePhotoAnimated(
            type: $type ?? self::fake()->word(),
            animation: $animation ?? self::fake()->text(50),
            mainFrameTimestamp: $mainFrameTimestamp,
        );
    }
}
