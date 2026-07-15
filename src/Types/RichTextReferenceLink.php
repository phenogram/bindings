<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A link to a reference.
 */
class RichTextReferenceLink extends RichText implements Interfaces\RichTextReferenceLinkInterface
{
    /**
     * @param string            $type          Type of the rich text, always “reference_link”
     * @param RichTextInterface $text          The link text
     * @param string            $referenceName The name of the reference
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
        public string $referenceName,
    ) {
    }
}
