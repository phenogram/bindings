<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextCashtagInterface;
use Phenogram\Bindings\Types\RichTextCashtag;

class RichTextCashtagFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextCashtag instance with default fake data.
     *
     * @param string|null                                                              $type    Optional. Type of the rich text, always “cashtag”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text    Optional. The text
     * @param string|null                                                              $cashtag Optional. The cashtag
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
        ?string $cashtag = null,
    ): RichTextCashtagInterface {
        return self::factory()->makeRichTextCashtag(
            type: $type ?? 'cashtag',
            text: $text ?? self::fake()->sentence(),
            cashtag: $cashtag ?? self::fake()->text(50),
        );
    }
}
