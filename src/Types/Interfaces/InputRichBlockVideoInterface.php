<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block with a video, corresponding to the HTML tag <video>.
 */
interface InputRichBlockVideoInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “video” */
    public string $type { set; get; }

    /** @var InputMediaVideoInterface $video The video. Caption is ignored. */
    public InputMediaVideoInterface $video { set; get; }

    /** @var RichBlockCaptionInterface|null $caption Optional. Caption of the block */
    public ?RichBlockCaptionInterface $caption { set; get; }
}
