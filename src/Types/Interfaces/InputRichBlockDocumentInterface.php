<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block with a general file, corresponding to the custom HTML tag <tg-document>.
 */
interface InputRichBlockDocumentInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “document” */
    public string $type { set; get; }

    /** @var InputMediaDocumentInterface $document The document. Caption is ignored. */
    public InputMediaDocumentInterface $document { set; get; }

    /** @var RichBlockCaptionInterface|null $caption Optional. Caption of the block */
    public ?RichBlockCaptionInterface $caption { set; get; }
}
