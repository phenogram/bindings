<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The paid media is a photo.
 */
interface PaidMediaPhotoInterface extends TypeInterface
{
    /** @var string $type Type of the paid media, always “photo” */
    public string $type { set; }

    /** @var array<PhotoSizeInterface> $photo The photo */
    public array $photo { set; }
}
