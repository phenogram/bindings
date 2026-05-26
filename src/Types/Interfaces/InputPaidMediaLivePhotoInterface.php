<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The paid media to send is a live photo.
 */
interface InputPaidMediaLivePhotoInterface extends TypeInterface
{
    /** @var string $type Type of the media, must be live_photo */
    public string $type { set; get; }

    /** @var string $media Video of the live photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files ». Sending live photos by a URL is currently unsupported. */
    public string $media { set; get; }

    /** @var string $photo The static photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files ». Sending live photos by a URL is currently unsupported. */
    public string $photo { set; get; }
}
