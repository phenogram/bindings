<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block with a photo, corresponding to the HTML tag <img>.
 */
interface RichBlockPhotoInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “photo” */
    public string $type { set; get; }

    /** @var array<PhotoSizeInterface> $photo Available sizes of the photo */
    public array $photo { set; get; }

    /** @var bool|null $hasSpoiler Optional. True, if the media preview is covered by a spoiler animation */
    public ?bool $hasSpoiler { set; get; }

    /** @var RichBlockCaptionInterface|null $caption Optional. Caption of the block */
    public ?RichBlockCaptionInterface $caption { set; get; }
}
