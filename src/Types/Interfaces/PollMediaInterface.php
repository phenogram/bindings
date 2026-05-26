<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * At most one of the optional fields can be present in any given object.
 */
interface PollMediaInterface extends TypeInterface
{
    /** @var AnimationInterface|null $animation Optional. Media is an animation, information about the animation */
    public ?AnimationInterface $animation { set; get; }

    /** @var AudioInterface|null $audio Optional. Media is an audio file, information about the file; currently, can't be received in a poll option */
    public ?AudioInterface $audio { set; get; }

    /** @var DocumentInterface|null $document Optional. Media is a general file, information about the file; currently, can't be received in a poll option */
    public ?DocumentInterface $document { set; get; }

    /** @var LivePhotoInterface|null $livePhoto Optional. Media is a live photo, information about the live photo */
    public ?LivePhotoInterface $livePhoto { set; get; }

    /** @var LocationInterface|null $location Optional. Media is a shared location, information about the location */
    public ?LocationInterface $location { set; get; }

    /** @var array<PhotoSizeInterface>|null $photo Optional. Media is a photo, available sizes of the photo */
    public ?array $photo { set; get; }

    /** @var StickerInterface|null $sticker Optional. Media is a sticker, information about the sticker; currently, for poll options only */
    public ?StickerInterface $sticker { set; get; }

    /** @var VenueInterface|null $venue Optional. Media is a venue, information about the venue */
    public ?VenueInterface $venue { set; get; }

    /** @var VideoInterface|null $video Optional. Media is a video, information about the video */
    public ?VideoInterface $video { set; get; }
}
