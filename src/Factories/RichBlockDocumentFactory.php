<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\DocumentFactory as Document;
use Phenogram\Bindings\Types\Interfaces\DocumentInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockDocumentInterface;
use Phenogram\Bindings\Types\RichBlockDocument;

class RichBlockDocumentFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockDocument instance with default fake data.
     *
     * @param string|null                    $type     Optional. Type of the block, always “document”
     * @param DocumentInterface|null         $document Optional. The document
     * @param RichBlockCaptionInterface|null $caption  Optional. Optional. Caption of the block
     */
    public static function make(
        ?string $type = null,
        ?DocumentInterface $document = null,
        ?RichBlockCaptionInterface $caption = null,
    ): RichBlockDocumentInterface {
        return self::factory()->makeRichBlockDocument(
            type: $type ?? 'document',
            document: $document ?? Document::make(),
            caption: $caption,
        );
    }
}
