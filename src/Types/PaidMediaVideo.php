<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\VideoInterface;

/**
 * The paid media is a video.
 */
class PaidMediaVideo extends PaidMedia implements Interfaces\PaidMediaVideoInterface
{
    /**
     * @param string         $type  Type of the paid media, always “video”
     * @param VideoInterface $video The video
     */
    public function __construct(
        public string $type,
        public VideoInterface $video,
    ) {
    }
}
