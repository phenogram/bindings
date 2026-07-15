<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextAnchorLinkInterface;
use Phenogram\Bindings\Types\RichTextAnchorLink;

class RichTextAnchorLinkFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextAnchorLink instance with default fake data.
     *
     * @param string|null                                                 $type       Optional. Type of the rich text, always “anchor_link”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text       Optional. The link text
     * @param string|null                                                 $anchorName Optional. The name of the anchor. If the name is empty, then the link brings back to the top of the message.
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
        ?string $anchorName = null,
    ): RichTextAnchorLinkInterface {
        return self::factory()->makeRichTextAnchorLink(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
            anchorName: $anchorName ?? self::fake()->text(50),
        );
    }
}
