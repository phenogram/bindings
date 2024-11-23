<?php

namespace Phenogram\Bindings\Types;

/**
 * The paid media to send is a photo.
 */
class InputPaidMediaPhoto extends InputPaidMedia implements Interfaces\InputPaidMediaPhotoInterface
{
    /**
     * @param string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
     * @param string $type  Type of the media, must be photo
     */
    public function __construct(
        public string $media,
        public string $type = 'photo',
    ) {
    }
}
