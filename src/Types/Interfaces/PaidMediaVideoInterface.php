<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The paid media is a video.
 */
interface PaidMediaVideoInterface extends TypeInterface
{
    /** @var string $type Type of the paid media, always “video” */
    public string $type { set; get; }

    /** @var VideoInterface $video The video */
    public VideoInterface $video { set; get; }
}
