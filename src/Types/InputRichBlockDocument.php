<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InputMediaDocumentInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

/**
 * A block with a general file, corresponding to the custom HTML tag <tg-document>.
 */
class InputRichBlockDocument extends InputRichBlock implements Interfaces\InputRichBlockDocumentInterface
{
    /**
     * @param string                         $type     Type of the block, always “document”
     * @param InputMediaDocumentInterface    $document The document. Caption is ignored.
     * @param RichBlockCaptionInterface|null $caption  Optional. Caption of the block
     */
    public function __construct(
        public string $type,
        public InputMediaDocumentInterface $document,
        public ?RichBlockCaptionInterface $caption = null,
    ) {
    }
}
