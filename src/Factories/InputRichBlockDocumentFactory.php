<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\InputMediaDocumentFactory as InputMediaDocument;
use Phenogram\Bindings\Types\InputRichBlockDocument;
use Phenogram\Bindings\Types\Interfaces\InputMediaDocumentInterface;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockDocumentInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;

class InputRichBlockDocumentFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockDocument instance with default fake data.
     *
     * @param string|null                      $type     Optional. Type of the block, always “document”
     * @param InputMediaDocumentInterface|null $document Optional. The document. Caption is ignored.
     * @param RichBlockCaptionInterface|null   $caption  Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?InputMediaDocumentInterface $document = null,
        ?RichBlockCaptionInterface $caption = null,
    ): InputRichBlockDocumentInterface {
        return self::factory()->makeInputRichBlockDocument(
            type: $type ?? 'document',
            document: $document ?? InputMediaDocument::make(),
            caption: $caption,
        );
    }
}
