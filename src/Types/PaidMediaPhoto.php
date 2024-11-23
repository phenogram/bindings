<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\PhotoSizeInterface;

/**
 * The paid media is a photo.
 */
class PaidMediaPhoto extends PaidMedia implements Interfaces\PaidMediaPhotoInterface
{
    /**
     * @param string                    $type  Type of the paid media, always “photo”
     * @param array<PhotoSizeInterface> $photo The photo
     */
    public function __construct(
        public string $type,
        public array $photo,
    ) {
    }
}
