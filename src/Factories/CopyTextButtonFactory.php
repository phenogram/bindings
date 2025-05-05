<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\CopyTextButton;
use Phenogram\Bindings\Types\Interfaces\CopyTextButtonInterface;

class CopyTextButtonFactory extends AbstractFactory
{
    /**
     * Creates a new CopyTextButton instance with default fake data.
     *
     * @param string|null $text Optional. The text to be copied to the clipboard; 1-256 characters
     */
    public static function make(?string $text = null): CopyTextButtonInterface
    {
        return self::factory()->makeCopyTextButton(
            text: $text ?? self::fake()->sentence(),
        );
    }
}
