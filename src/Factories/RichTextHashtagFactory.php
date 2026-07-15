<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextHashtagInterface;
use Phenogram\Bindings\Types\RichTextHashtag;

class RichTextHashtagFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextHashtag instance with default fake data.
     *
     * @param string|null                                                 $type    Optional. Type of the rich text, always “hashtag”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text    Optional. The text
     * @param string|null                                                 $hashtag Optional. The hashtag
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
        ?string $hashtag = null,
    ): RichTextHashtagInterface {
        return self::factory()->makeRichTextHashtag(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
            hashtag: $hashtag ?? self::fake()->text(50),
        );
    }
}
