<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * An animated profile photo in the MPEG4 format.
 */
interface InputProfilePhotoAnimatedInterface extends TypeInterface
{
    /** @var string $type Type of the profile photo, must be animated */
    public string $type { set; }

    /** @var string $animation The animated profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files » */
    public string $animation { set; }

    /** @var float|null $mainFrameTimestamp Optional. Timestamp in seconds of the frame that will be used as the static profile photo. Defaults to 0.0. */
    public ?float $mainFrameTimestamp { set; }
}
