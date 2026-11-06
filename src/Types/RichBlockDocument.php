<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\DocumentInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

/**
 * A block with a general file, corresponding to the custom HTML tag <tg-document>.
 */
class RichBlockDocument extends RichBlock implements Interfaces\RichBlockDocumentInterface
{
    /**
     * @param string                         $type     Type of the block, always “document”
     * @param DocumentInterface              $document The document
     * @param RichBlockCaptionInterface|null $caption  Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public DocumentInterface $document,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
