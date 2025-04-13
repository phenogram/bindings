<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes a photo to post as a story.
 */
class InputStoryContentPhoto extends InputStoryContent implements Interfaces\InputStoryContentPhotoInterface
{
    /**
     * @param string $photo The photo to post as a story. The photo must be of the size 1080x1920 and must not exceed 10 MB. The photo can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
     * @param string $type  Type of the content, must be photo
     */
    public function __construct(
        public string $photo,
        public string $type = 'photo',
    ) {
    }
}
