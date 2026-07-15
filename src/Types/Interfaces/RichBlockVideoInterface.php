<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block with a video, corresponding to the HTML tag <video>.
 */
interface RichBlockVideoInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “video” */
    public string $type { set; get; }

    /** @var VideoInterface $video The video */
    public VideoInterface $video { set; get; }

    /** @var bool|null $hasSpoiler Optional. True, if the media preview is covered by a spoiler animation */
    public ?bool $hasSpoiler { set; get; }

    /** @var RichBlockCaptionInterface|null $caption Optional. Caption of the block */
    public ?RichBlockCaptionInterface $caption { set; get; }
}
