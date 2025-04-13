<?php

namespace Phenogram\Bindings\Types;

/**
 * An animated profile photo in the MPEG4 format.
 */
class InputProfilePhotoAnimated extends InputProfilePhoto implements Interfaces\InputProfilePhotoAnimatedInterface
{
    /**
     * @param string     $animation          The animated profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
     * @param string     $type               Type of the profile photo, must be animated
     * @param float|null $mainFrameTimestamp Optional. Timestamp in seconds of the frame that will be used as the static profile photo. Defaults to 0.0.
     */
    public function __construct(
        public string $animation,
        public string $type = 'animated',
        public ?float $mainFrameTimestamp = null,
    ) {
    }
}
