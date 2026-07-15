<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichMessageInterface;
use Phenogram\Bindings\Types\RichMessage;

class RichMessageFactory extends AbstractFactory
{
    /**
     * Creates a new RichMessage instance with default fake data.
     *
     * @param array|null $blocks Optional. Content of the message
     * @param bool|null  $isRtl  Optional. Optional. True, if the rich message must be shown right-to-left
     */
    public static function make(?array $blocks = null, ?bool $isRtl = null): RichMessageInterface
    {
        return self::factory()->makeRichMessage(
            blocks: $blocks ?? [],
            isRtl: $isRtl,
        );
    }
}
