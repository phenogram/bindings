<?php

namespace Phenogram\Bindings\Types;

/**
 * The paid media to send is a live photo.
 */
class InputPaidMediaLivePhoto extends InputPaidMedia implements Interfaces\InputPaidMediaLivePhotoInterface
{
    /**
     * @param string $media Video of the live photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files ». Sending live photos by a URL is currently unsupported.
     * @param string $photo The static photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files ». Sending live photos by a URL is currently unsupported.
     * @param string $type  Type of the media, must be live_photo
     */
    public function __construct(
        public string $media,
        public string $photo,
        public string $type = 'live_photo',
    ) {
    }
}
