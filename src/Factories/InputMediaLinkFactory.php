<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputMediaLink;
use Phenogram\Bindings\Types\Interfaces\InputMediaLinkInterface;

class InputMediaLinkFactory extends AbstractFactory
{
    /**
     * Creates a new InputMediaLink instance with default fake data.
     *
     * @param string|null $type Optional. Type of the media, must be link
     * @param string|null $url  Optional. HTTP URL of the link
     */
    public static function make(?string $type = null, ?string $url = null): InputMediaLinkInterface
    {
        return self::factory()->makeInputMediaLink(
            type: $type ?? self::fake()->word(),
            url: $url ?? self::fake()->url(),
        );
    }
}
