<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\AnimationInterface;
use Phenogram\Bindings\Types\Interfaces\AudioInterface;
use Phenogram\Bindings\Types\Interfaces\DocumentInterface;
use Phenogram\Bindings\Types\Interfaces\LivePhotoInterface;
use Phenogram\Bindings\Types\Interfaces\LocationInterface;
use Phenogram\Bindings\Types\Interfaces\PhotoSizeInterface;
use Phenogram\Bindings\Types\Interfaces\StickerInterface;
use Phenogram\Bindings\Types\Interfaces\VenueInterface;
use Phenogram\Bindings\Types\Interfaces\VideoInterface;

/**
 * At most one of the optional fields can be present in any given object.
 */
class PollMedia implements Interfaces\PollMediaInterface
{
    /**
     * @param AnimationInterface|null        $animation Optional. Media is an animation, information about the animation
     * @param AudioInterface|null            $audio     Optional. Media is an audio file, information about the file; currently, can't be received in a poll option
     * @param DocumentInterface|null         $document  Optional. Media is a general file, information about the file; currently, can't be received in a poll option
     * @param LivePhotoInterface|null        $livePhoto Optional. Media is a live photo, information about the live photo
     * @param LocationInterface|null         $location  Optional. Media is a shared location, information about the location
     * @param array<PhotoSizeInterface>|null $photo     Optional. Media is a photo, available sizes of the photo
     * @param StickerInterface|null          $sticker   Optional. Media is a sticker, information about the sticker; currently, for poll options only
     * @param VenueInterface|null            $venue     Optional. Media is a venue, information about the venue
     * @param VideoInterface|null            $video     Optional. Media is a video, information about the video
     */
    public function __construct(
        public ?AnimationInterface $animation = null,
        public ?AudioInterface $audio = null,
        public ?DocumentInterface $document = null,
        public ?LivePhotoInterface $livePhoto = null,
        public ?LocationInterface $location = null,
        public ?array $photo = null,
        public ?StickerInterface $sticker = null,
        public ?VenueInterface $venue = null,
        public ?VideoInterface $video = null,
    ) {
    }
}
