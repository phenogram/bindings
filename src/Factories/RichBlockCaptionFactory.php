<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichBlockCaptionInterface;
use Phenogram\Bindings\Types\RichBlockCaption;

class RichBlockCaptionFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockCaption instance with default fake data.
     *
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text   Optional. Block caption
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $credit Optional. Optional. Block credit which corresponds to the HTML tag
     */
    public static function make(
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $credit = null,
    ): RichBlockCaptionInterface {
        return self::factory()->makeRichBlockCaption(
            text: $text ?? '[Abstract type: RichText]',
            credit: $credit,
        );
    }
}
