<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block with a photo, corresponding to the HTML tag <img>.
 */
interface InputRichBlockPhotoInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “photo” */
    public string $type { set; get; }

    /** @var InputMediaPhotoInterface $photo The photo. Caption is ignored. */
    public InputMediaPhotoInterface $photo { set; get; }

    /** @var RichBlockCaptionInterface|null $caption Optional. Caption of the block */
    public ?RichBlockCaptionInterface $caption { set; get; }
}
