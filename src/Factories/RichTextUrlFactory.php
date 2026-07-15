<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextUrlInterface;
use Phenogram\Bindings\Types\RichTextUrl;

class RichTextUrlFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextUrl instance with default fake data.
     *
     * @param string|null                                                 $type Optional. Type of the rich text, always “url”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text Optional. The text
     * @param string|null                                                 $url  Optional. URL of the link
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
        ?string $url = null,
    ): RichTextUrlInterface {
        return self::factory()->makeRichTextUrl(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
            url: $url ?? self::fake()->url(),
        );
    }
}
