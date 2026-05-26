<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The paid media is a live photo.
 */
interface PaidMediaLivePhotoInterface extends TypeInterface
{
    /** @var string $type Type of the paid media, always “live_photo” */
    public string $type { set; get; }

    /** @var LivePhotoInterface $livePhoto The photo */
    public LivePhotoInterface $livePhoto { set; get; }
}
