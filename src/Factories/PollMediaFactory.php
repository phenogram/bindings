<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\AnimationFactory as Animation;
use Phenogram\Bindings\Factories\AudioFactory as Audio;
use Phenogram\Bindings\Factories\LocationFactory as Location;
use Phenogram\Bindings\Factories\StickerFactory as Sticker;
use Phenogram\Bindings\Factories\VenueFactory as Venue;
use Phenogram\Bindings\Factories\VideoFactory as Video;
use Phenogram\Bindings\Types\Interfaces\AnimationInterface;
use Phenogram\Bindings\Types\Interfaces\AudioInterface;
use Phenogram\Bindings\Types\Interfaces\DocumentInterface;
use Phenogram\Bindings\Types\Interfaces\LivePhotoInterface;
use Phenogram\Bindings\Types\Interfaces\LocationInterface;
use Phenogram\Bindings\Types\Interfaces\PollMediaInterface;
use Phenogram\Bindings\Types\Interfaces\StickerInterface;
use Phenogram\Bindings\Types\Interfaces\VenueInterface;
use Phenogram\Bindings\Types\Interfaces\VideoInterface;
use Phenogram\Bindings\Types\PollMedia;

class PollMediaFactory extends AbstractFactory
{
    /**
     * Creates a new PollMedia instance with default fake data.
     *
     * @param AnimationInterface|null $animation Optional. Optional. Media is an animation, information about the animation
     * @param AudioInterface|null     $audio     Optional. Optional. Media is an audio file, information about the file; currently, can't be received in a poll option
     * @param DocumentInterface|null  $document  Optional. Optional. Media is a general file, information about the file; currently, can't be received in a poll option
     * @param LivePhotoInterface|null $livePhoto Optional. Optional. Media is a live photo, information about the live photo
     * @param LocationInterface|null  $location  Optional. Optional. Media is a shared location, information about the location
     * @param array|null              $photo     Optional. Optional. Media is a photo, available sizes of the photo
     * @param StickerInterface|null   $sticker   Optional. Optional. Media is a sticker, information about the sticker; currently, for poll options only
     * @param VenueInterface|null     $venue     Optional. Optional. Media is a venue, information about the venue
     * @param VideoInterface|null     $video     Optional. Optional. Media is a video, information about the video
     */
    public static function make(
        ?AnimationInterface $animation = null,
        ?AudioInterface $audio = null,
        ?DocumentInterface $document = null,
        ?LivePhotoInterface $livePhoto = null,
        ?LocationInterface $location = null,
        ?array $photo = null,
        ?StickerInterface $sticker = null,
        ?VenueInterface $venue = null,
        ?VideoInterface $video = null,
    ): PollMediaInterface {
        return self::factory()->makePollMedia(
            animation: $animation,
            audio: $audio,
            document: $document,
            livePhoto: $livePhoto,
            location: $location,
            photo: $photo,
            sticker: $sticker,
            venue: $venue,
            video: $video,
        );
    }
}
