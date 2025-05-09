<?php

namespace Phenogram\Bindings\Types;

/**
 * A static profile photo in the .JPG format.
 */
class InputProfilePhotoStatic extends InputProfilePhoto implements Interfaces\InputProfilePhotoStaticInterface
{
    /**
     * @param string $photo The static profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
     * @param string $type  Type of the profile photo, must be static
     */
    public function __construct(
        public string $photo,
        public string $type = 'static',
    ) {
    }
}
