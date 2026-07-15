<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InputMediaPhotoInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

/**
 * A block with a photo, corresponding to the HTML tag <img>.
 */
class InputRichBlockPhoto extends InputRichBlock implements Interfaces\InputRichBlockPhotoInterface
{
    /**
     * @param string                         $type    Type of the block, always “photo”
     * @param InputMediaPhotoInterface       $photo   The photo. Caption is ignored.
     * @param RichBlockCaptionInterface|null $caption Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public InputMediaPhotoInterface $photo,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
