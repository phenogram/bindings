<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\LivePhotoInterface;

/**
 * The paid media is a live photo.
 */
class PaidMediaLivePhoto extends PaidMedia implements Interfaces\PaidMediaLivePhotoInterface
{
    /**
     * @param string             $type      Type of the paid media, always “live_photo”
     * @param LivePhotoInterface $livePhoto The photo
     */
    public function __construct(
        public string $type,
        public LivePhotoInterface $livePhoto,
    ) {
    }
}
