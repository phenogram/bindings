<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextReferenceLinkInterface;
use Phenogram\Bindings\Types\RichTextReferenceLink;

class RichTextReferenceLinkFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextReferenceLink instance with default fake data.
     *
     * @param string|null                                                              $type          Optional. Type of the rich text, always “reference_link”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text          Optional. The link text
     * @param string|null                                                              $referenceName Optional. The name of the reference
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
        ?string $referenceName = null,
    ): RichTextReferenceLinkInterface {
        return self::factory()->makeRichTextReferenceLink(
            type: $type ?? 'reference_link',
            text: $text ?? self::fake()->sentence(),
            referenceName: $referenceName ?? self::fake()->text(50),
        );
    }
}
